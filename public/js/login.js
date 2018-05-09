jQuery(document).ready(function() {
  const userForm = $(".user-form");
  const goToLogin = $(".already");
  const loginButton = $(".already").find("a");
  const registerForm = $(".register-form");
  const inputs = $(".field");

  inputs.click(function() {
    $(this)
      .find(".label-wrapper")
      .find("label")
      .addClass("focus");
  });
  loginButton.click(function() {
    userForm.removeClass("fadeIn");
    userForm.addClass("bounceOutUp");
    setTimeout(() => {
        userForm.removeClass("bounceOutUp");
        userForm.addClass("bounceInDown");

        registerForm.hide();
    userForm.load("/login");
    goToLogin.hide();
    },600);
    
  });
});
