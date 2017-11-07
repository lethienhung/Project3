Vue.component("register", {
  template: "#register-template",
  data() {
    return {

      first_name: "",
      last_name: "",
      email: "",
      phone_number: "",
      password: "",
      password_confirm: "",

    };
  },
  methods: {
    createInstructor() {
      axios
        .post("/company/instructor/create", {
          first_name: this.first_name,
          last_name: this.last_name,
          email: this.email,
          password: this.password,
          phone_number: this.phone_number

        })
        .then(response => {
          alert("Account for instructor have been created!");
        });
    }
  }
});
new Vue({
  el: "#instructor-create"
});