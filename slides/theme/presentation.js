var setHeight = function () {
    var impress = document.getElementById('impress');
    impress.style.height = window.innerHeight + 'px';
}

// If we resize the window, set the height of the container to the
// new window height.
window.onresize = setHeight;

document.addEventListener('DOMContentLoaded', function (event) {
    var impress = document.getElementById('impress');

    // These values allow us to support a wide range of projector resolutions.
    impress.style.width = '100%';
    impress.style.height = window.innerHeight + 'px';
    impress.firstElementChild.style.width = '100%';
    impress.firstElementChild.style.height = '100%';
});
