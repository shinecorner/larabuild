import Vue from 'vue'
new Vue({
    el: "#app",
    data: {
        message: "how are you?",
        itemId: "item-7",
        price: 10,
        gst: 2,
        seen: true,
        attributeName: "href",
        phone: "",
        url: "https://google.com"
    },
    methods: {
        changeMsg(){
            this.message = "<b>Hello</b>"
        },
        toggleMessage(){
            this.seen = !(this.seen)
        },
        focusOnButton(){
            this.message = "Focus on button"
        },
        clickOnButton(){
            this.message = "Click on button"
        },
        mouseOverButton(){
            this.message = "Mouse over on Button"
        },
        onSubmitForm(){
            this.message = "Form is submitted"
            if((this.phone) && (/^\d+$/.test(this.phone))){
                this.$refs.personForm.submit();
            }
        }
    }
})
