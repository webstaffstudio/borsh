
window.addEventListener('DOMContentLoaded', function() {
    function addVegaAnimation() {
        document.querySelectorAll('.vega-anim__desktop').forEach(function(el) {
            el.classList.add('vega-anim__desktop--animate');
        });

        document.querySelectorAll('.vega-anim__mobile').forEach(function(el) {
            el.classList.add('vega-anim__mobile--animate');
        });
    }

    addVegaAnimation();
});
