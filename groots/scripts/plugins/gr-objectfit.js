// emulateObjectfit is an object-fit:cover polyfill for Internet Explorer browsers.

window.emulateObjectfit = function (node) {
    // restrict to valid object-fit value
    var objectFit = node.currentStyle['object-fit'];

    if (!objectFit || !/^(contain|cover|fill)$/.test(objectFit)) return;

    var addEventListener = node.addEventListener || node.attachEvent;
    var removeEventListener = node.removeEventListener || node.detachEvent;
    var on = node.addEventListener ? '' : 'on';
    var img = node.nodeName.toLowerCase() === 'img';
    var type = img ? 'load' : 'loadedmetadata';

    addEventListener.call(node, on + type, onload);

    if (node.complete) onload();

    function onload() {
        removeEventListener.call(node, on + type, onload);

        var imgx = document.createElement('objectfit');
        imgx.appendChild(node.parentNode.replaceChild(imgx, node));
        imgx.style.backgroundImage = 'url('+ node.src +')';
        node.parentNode.removeChild(node);
    }
};

window.emulateObjectfit.init = function () {
    if (document.body) {
        var all = document.querySelectorAll('img,video');
        var index = -1;

        while (all[++index]) window.emulateObjectfit(all[index]);
    } else {
        setTimeout(window.emulateObjectfit.init);
    }
};

if (/MSIE|Trident/.test(navigator.userAgent)) {
    window.emulateObjectfit.init();
}
