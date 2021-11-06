window.onload=tutte();

function tutte(){

    document.getElementById('data').onclick=date;
}

    function date() {

      var day,number,month,year,my_date,today;
      my_date = new Date();
      day = my_date.getDay();
      number = my_date.getDate();
      month = my_date.getMonth();
      year = (my_date.getFullYear() - 2000);
      switch (day) {
      case 0: day="Dom ";
      break;
      case 1: day="Lun";
      break;
      case 2: day="Mar ";
      break;
      case 3: day="Mer ";
      break;
      case 4: day="Gio ";
      break;
      case 5: day="Ven ";
      break;
      case 6: day="Sab ";
      break;
     }

     switch (month) {
      case 0:
            month=" gen";
            break;
      case 1:
            month=" feb";
            break;
      case 2:
            month=" mar";
            break;
      case 3:
            month=" apr";
            break;
      case 4:
            month=" mag";
            break;
      case 5:
            month=" gio";
            break;
      case 6:
            month=" lug";
            break;
      case 7:
            month=" ago";
            break;
      case 8:
            month=" set";
            break;
      case 9:
            month=" ott";
            break;
      case 10:
            month=" nov";
            break;
      case 11:
            month=" dic";
            break;
      }

      today= day + number + month+ ", ‘" + year;

       alert(today);

    }
