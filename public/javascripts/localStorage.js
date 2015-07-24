// ids = [220, 240, 260];
// names = ["Tone", "Jan", "Roald"];

checkLocalStorageSupport = function () {
    console.log('typeOf(localStorage): ' + typeof(localStorage));
    if (typeof(localStorage) === 'undefined') {
        alert('Your browser does not support HTML5 localStorage. Try upgrading.');
        return false;
    }
    return true;
};

setItem = function (key, value) {
    console.log("Setting key " + key + " with value " + value);
    try {
        localStorage.setItem(key, value); //saves to the database, “key”, “value”
    } catch (e) {
        if (e == QUOTA_EXCEEDED_ERR) {
            alert('Quota exceeded!'); //data wasn’t successfully saved due to quota exceed so throw an error
        }
    }
};

getItem = function (key) {
    return localStorage.getItem(key);
};

deleteItem = function (key) {
    console.log('removing "' + key + '" from local storage');
    return localStorage.removeItem(key);
};

getAllPairs = function () {
    var pairs = [];
    for (var i = 0; i < localStorage.length; i++) {
        var pair = {key: localStorage.key(i), value: localStorage.getItem(localStorage.key(i))};
        pairs.push(pair);
    }
    return pairs;
};