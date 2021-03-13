import Vue from 'vue'

new Vue({
    el: "#app",
    data: {
        message: "How Are You?",
        itemId: "item-7",
        price: 10,
        gst: 2,
        seen: true,
        attributeName: "href",
        url: "https://google.com",
        phone: "",
        type: "A",
        loginType: "username"
        },
    methods: {
        changeMsg() {
            this.message = "<b>Hello</b>"
        },
        toggleMessage() {
            this.seen = !(this.seen)
        },
        focusOnButton() {
            this.message = "Focus on button"
        },
        clickOnButton() {
            this.message = "Click on button"
        },
        mouseOverButton() {
            this.message = "Mouse over on Button"
        },
        onSubmitForm(){
            this.message = "Form is Submitted"
            if((this.phone) && (/^\d+$/.test(this.phone))){
             this.$refs.personForm.submit();
            }
        },
        toggleLoginType(){
            this.loginType = (this.loginType === 'username') ? 'email' : 'username';
        }

    }
})

