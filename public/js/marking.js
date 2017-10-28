Vue.component("marking", {
    template: "#marking-template",
    data() {
        return {
            mark: document.getElementById("old-mark").value,
            student_id: document.getElementById("sid").value
        };
    },

    methods: {
        makeMark() {
            //this.mark = this.newMark;
            //alert(this.newMark);
            axios.post("/instructor/mark/" + student_id).then(response => {
                alert("DONE!");
            });
        }
    }
});
new Vue({
    el: "#make-mark"
});