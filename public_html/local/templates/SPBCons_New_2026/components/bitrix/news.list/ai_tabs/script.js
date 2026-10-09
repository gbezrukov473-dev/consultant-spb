document.addEventListener('DOMContentLoaded', function() {
    'use strict'; 

    var tabs = document.querySelectorAll('.kits__tab'); 
    var panes = document.querySelectorAll('.kits__pane'); 

    if (tabs.length && panes.length) {
        function setActiveTab(index) { 
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove('is-active'); 
            }
            tabs[index].classList.add('is-active'); 

            for (var j = 0; j < panes.length; j++) {
                panes[j].classList.remove('is-active'); 
            }

            if (panes[index]) {
                panes[index].classList.add('is-active');
            }
        } 

        for (var k = 0; k < tabs.length; k++) {
            (function(index) {
                tabs[index].addEventListener('click', function() { 
                    setActiveTab(index); 
                }); 
            })(k);
        }
    }

    var videoModals = document.querySelectorAll('.modal--video');

    function pauseModalVideo(modal) {
        var video = modal.querySelector('video');
        if (video) {
            video.pause();
        }
    }

    var closeButtons = document.querySelectorAll('.modal--video .modal__close');
    for (var m = 0; m < closeButtons.length; m++) {
        closeButtons[m].addEventListener('click', function(e) {
            var target = e.target || e.srcElement; 
            var modal = target;
            while (modal && !modal.classList.contains('modal--video')) {
                modal = modal.parentElement;
            }
            if (modal) pauseModalVideo(modal);
        });
    }

    document.addEventListener('click', function(e) {
        var target = e.target || e.srcElement;
        
        if (target.tagName.toLowerCase() === 'video' || target.getAttribute('data-open-modal')) {
            return;
        }

        var parent = target;
        while (parent) {
            if (parent.getAttribute && parent.getAttribute('data-open-modal')) {
                return;
            }
            parent = parent.parentElement;
        }

        for (var n = 0; n < videoModals.length; n++) {
            var modal = videoModals[n];
            (function(currentModal) {
                setTimeout(function() {
                    if (!currentModal.classList.contains('is-active')) {
                        pauseModalVideo(currentModal);
                    }
                }, 50);
            })(modal);
        }
    });

    document.addEventListener('keydown', function(e) {
        var keyCode = e.keyCode || e.which;
        var key = e.key;

        if (key === 'Escape' || key === 'Esc' || keyCode === 27) {
            for (var x = 0; x < videoModals.length; x++) {
                pauseModalVideo(videoModals[x]);
            }
        }
    });

});