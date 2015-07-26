// ids = [220, 240, 260];
// names = ["Tone", "Jan", "Roald"];

var vm = new Vue({
    el: '#namesMap',

    data: {
        newId: '',
        newUser: ''
    },

    computed: {
        pairs: function () {
            var pairs = [];
            for (var i = 0; i < localStorage.length; i++) {
                var pair = {key: localStorage.key(i), value: localStorage.getItem(localStorage.key(i))};
                pairs.push(pair);
            }
            return pairs;
        }
    },
    methods: {
        addItem: function (key, value) {
            console.log("Setting key " + key + " with value " + value);
            try {
                localStorage.setItem(key, value); //saves to the database, “key”, “value”
            } catch (e) {
                if (e == QUOTA_EXCEEDED_ERR) {
                    alert('Quota exceeded!'); //data wasn’t successfully saved due to quota exceed so throw an error
                }
            }
        },

        editPair: function(pair) {
            console.log("editPair(" + pair.key + "/" + pair.value + ")");
            this.newId = pair.key;
            this.newUser = pair.value;
            localStorage.removeItem(pair.key);
                this.pair.$remove;
        },

        editData: function() {
            return localStorage.getItem(this.newId) !== null;
        }
    }

});

checkLocalStorageSupport = function () {
    console.log('typeOf(localStorage): ' + typeof(localStorage));
    if (typeof(localStorage) === 'undefined') {
        alert('Your browser does not support HTML5 localStorage. Try upgrading.');
        return false;
    }
    return true;
};


deleteItem = function (key) {
    console.log('removing "' + key + '" from local storage');
    return localStorage.removeItem(key);
};

