window.addEventListener("scroll", function () {
  const section = document.getElementById("diadiem");
  const position = section.getBoundingClientRect();

  if (position.top < window.innerHeight && position.bottom >= 0) {
    console.log("Bạn đang xem phần địa điểm du lịch nổi bật!");
  }
});
