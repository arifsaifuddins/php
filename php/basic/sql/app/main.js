// // vanila js

// const key = document.querySelector('.key');
// const data = document.querySelector('.data');

// key.addEventListener('input', () => {

//   const xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       data.innerHTML = xhr.responseText;
//     }
//   }

//   xhr.open('GET', '../data.php?keyword=' + key.value, true);
//   xhr.send();

// });


// jquery

$(document).ready(function () {
  $('.key').on('input', function () {
    $('.data').load('data.php?keyword=' + $('.key').val());
  });
});