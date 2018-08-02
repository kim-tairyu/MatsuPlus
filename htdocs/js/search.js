$(function(){
  $(".openBtn").click(function(){
    $($(this).next(".search")).animate(
      {height: "toggle", opacity: "toggle"},

      "nomal"
    );
  });
});