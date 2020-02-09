const Toast = {
    init() {
        this.hideTimeout = null;

        this.el = document.createElement('div');
        this.el.className = "toast";
        document.body.appendChild(this.el);
    }
};

document.addEventListener('DOMContentLoaded', () => Toast.init());