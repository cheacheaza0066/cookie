<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/policy.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light p-3" style="background-color: #ffa500">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
         
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex" style="margin-left: 264px" >
                  <img src="{{url('image/sacict-3.png')}}" alt="" class="img-logo-nav">
          </div>
          
            <form class="d-flex">
              <input style="padding-right: 450px" class="form-control me-2 mt-2" type="search" placeholder="ค้นหา..." aria-label="Search">
              <button class="btn btn-outline-success mt-2" type="submit">Search</button>
            </form>
            
            <ul class="navbar-nav me-auto mb-2 mt-3">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Thai
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5" href="https://sacitshop.com/session/signup">สมัครสมาชิก
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5" href="#">|</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5" href="https://sacitshop.com/session/signin">เข้าสู่ระบบ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5" href="#">|</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5" href="https://sacitshop.com/seller">Seller Centre</a>
              </li>
              
              
            </ul>
            
          </div>
        </div>
      </nav>


      <div class="top">
        <img src="{{url('image/backgroundtop.jpg')}}" alt="" class="img-top">
        <div class="start-1 p-2 text-white fs-3">นโยบายคุกกี้</div>
        <div class="start-2 p-2 text-white ">นโยบายคุกกี้</div>
        <hr class="start-3">

        {{-- <div class="start-2">นโยบายคุ้กกี้</div> --}}


      </div>

    <div class="container">

        <h1 class="text-center mt-5"><u>นโยบายคุกกี้</u></h1>
        <p class="mt-5 text-cookie">เมื่อท่านได้เข้าสู่เว็บไซต์ <a href="https://sacitshop.com/">(www.sacitshop.com)</a>&nbsp;ข้อมูลที่เกี่ยวข้องกับการเข้าสู่เว็บไซต์ ของท่านจะถูกบันทึกไว้ในรูปแบบของคุกกี้ โดยนโยบายคุกกี้นี้จะอธิบายถึงความหมาย การทำงาน วัตถุประสงค์ รวมถึงการลบและการปฏิเสธการเก็บคุกกี้ เพื่อความเป็นส่วนตัวของท่าน โดยการเข้าสู่เว็บไซต์นี้ถือว่าท่านได้อนุญาตให้เราใช้คุกกี้ตามนโยบายคุกกี้ที่มีรายละเอียดดังต่อไปนี้</p>
    <h2 class="mt-4 mb-4">คุกกี้คืออะไร</h2>
        <p>คุกกี้ คือ ไฟล์เล็ก ๆ เพื่อจัดเก็บข้อมูลการเข้าใช้งานเว็บไซต์ เช่น วันเวลา ลิงค์ที่คลิก หน้าที่เข้าชม เงื่อนไขการตั้งค่าต่าง ๆ โดยจะบันทึกลงไปในอุปกรณ์คอมพิวเตอร์ และ/หรือ เครื่องมือสื่อสารที่เข้าใช้งานของท่าน เช่น โน๊ตบุ๊ค แท็บเล็ต หรือ สมาร์ทโฟน ผ่านทางเว็บเบราว์เซอร์ในขณะที่ท่านเข้าสู่เว็บไซต์ โดยคุกกี้จะไม่ก่อให้เกิดอันตรายต่ออุปกรณ์คอมพิวเตอร์ และ/หรือ เครื่องมือสื่อสารของท่าน ในกรณีดังต่อไปนี้ ข้อมูลส่วนบุคคลของท่านอาจถูกจัดเก็บเพื่อใช้เพิ่มประสบการณ์การใช้งานบริการทางออนไลน์ โดยจะจำเอกลักษณ์ของภาษาและปรับแต่งข้อมูลการใช้งานตามความต้องการของท่าน เป็นการยืนยันคุณลักษณะเฉพาะตัว ข้อมูลความปลอดภัยของท่าน รวมถึงบริการที่ท่านสนใจ นอกจากนี้คุกกี้ยังถูกใช้เพื่อวัดปริมาณการเข้าใช้งานบริการทางออนไลน์ 
            การปรับเปลี่ยนเนื้อหาตามการใช้งานของท่านโดยพิจารณาจากพฤติกรรมการเข้าใช้งานครั้งก่อน ๆ และ ณ ปัจจุบัน และอาจมีวัตถุประสงค์เพื่อการโฆษณาประชาสัมพันธ์</p>
        <p>ทั้งนี้ท่านสามารถค้นหาข้อมูลเพิ่มเติมเกี่ยวกับคุกกี้ได้ที่ <a href="https://allaboutcookies.org/">www.allaboutcookies.org</a></p>    
    
    <h2 class="mt-4 mb-4">สศท. ใช้คุกกี้อย่างไร</h2>
    <p>สศท.ใช้คุกกี้ เพื่อบันทึกการเข้าเยี่ยมชมและสมัครเข้าใช้งานเว็บไซต์ของท่าน โดยทำให้ สศท. สามารถจดจำการใช้งานเว็บไซต์ของท่านได้ง่ายขึ้น
         และข้อมูลเหล่านี้จะถูกนำไปเพื่อปรับปรุงเว็บไซต์ของ สศท.ให้ตรงกับความต้องการของท่านมากยิ่งขึ้น เพื่ออำนวยความสะดวกให้เกิดความรวดเร็วในการใช้งานเว็บไซต์ของท่าน และในบางกรณี สศท. จำเป็นต้องให้บุคคลที่สามช่วยดำเนินการดังกล่าว ซึ่งอาจจะต้องใช้ อินเตอร์เน็ตโปรโตคอลแอดเดรส (IP Address) 
        และคุกกี้เพื่อวิเคราะห์ทางสถิติ ตลอดจนเชื่อมโยงข้อมูล และประมวลผลตามวัตถุประสงค์ทางการตลาด</p>

              <button class="accordion"><span class="ms-3 ">คุกกี้ที่ สพร. ใช้ อาจจะแบ่งได้ 2 ประเภทตามการจัดเก็บ ดังนี้</span></button>
              <div class="panel mt-3 mb-3 ms-5">
                <p>1. Session Cookies เป็นคุกกี้ที่จะอยู่ชั่วคราวเพื่อจดจำท่านในระหว่างที่ท่านเข้าเยี่ยมชมเว็บไซต์ของ สพร. เช่น เฝ้าติดตามภาษาที่ท่านได้ตั้งค่าและเลือกใช้ เป็นต้น และจะมีการลบออกจากเครื่องคอมพิวเตอร์หรืออุปกรณ์ของท่าน เมื่อท่านออกจากเว็บไซต์หรือได้ทำการปิดเว็บเบราว์เซอร์
                  <br>
                  2. Persistent Cookie เป็นคุกกี้ที่จะอยู่ตามระยะเวลาที่กำหนดหรือจนกว่าท่านจะลบออก คุกกี้ประเภทนี้จะช่วยให้เว็บไซต์ของ สพร. จดจำท่านและการตั้งค่าต่าง ๆ ของท่านเมื่อท่านกลับมาใช้บริการเว็บไซต์อีกครั้ง ซึ่งจะช่วยให้ท่านเข้าใช้บริการเว็บไซต์ได้สะดวกรวดเร็วยิ่งขึ้น</p>
              </div>

              <button class="accordion"><span class="ms-3 ">วัตถุประสงค์ในการใช้งานคุกกี้ที่ สพร. ใช้ มีรายละเอียดดังนี้</span></button>
              <div class="panel ms-3">
                <ul>
                  <li><p class="">คุกกี้ที่มีความจำเป็น (Strictly Necessary Cookies)</p></li>
                  <li><p class="">คุกกี้ประเภทนี้มีความจำเป็นต่อการให้บริการเว็บไซต์ของ สพร. เพื่อให้ท่านสามารถเข้าใช้งานในส่วนต่าง ๆ ของเว็บไซต์ได้ รวมถึงช่วยจดจำข้อมูลที่ท่านเคยให้ไว้ผ่านเว็บไซต์ 
                                  การปิดการใช้งานคุกกี้ประเภทนี้จะส่งผลให้ท่านไม่สามารถใช้บริการในสาระสำคัญของ สพร. 
                                  ซึ่งจำเป็นต้องเรียกใช้คุกกี้ได้</p></li>
                  <li><p class="">คุกกี้ประเภทนี้ช่วยให้ สพร. ทราบถึงการปฏิสัมพันธ์ของผู้ใช้งานในการใช้บริการเว็บไซต์ของ สพร.  รวมถึงหน้าเพจหรือพื้นที่ใดของเว็บไซต์ที่ได้รับความนิยม ตลอดจนการวิเคราะห์ข้อมูลด้านอื่น ๆ สพร. ยังใช้ข้อมูลนี้เพื่อการปรับปรุงการทำงานของเว็บไซต์ และเพื่อเข้าใจพฤติกรรมของผู้ใช้งานมากขึ้น ถึงแม้ว่า ข้อมูลที่คุกกี้นี้เก็บรวบรวมจะเป็นข้อมูลที่ไม่สามารถระบุตัวตนได้ และนำมาใช้วิเคราะห์ทางสถิติเท่านั้น 
                    การปิดการใช้งานคุกกี้ประเภทนี้จะส่งผลให้ สพร. ไม่สามารถทราบปริมาณผู้เข้าเยี่ยมชมเว็บไซต์ 
                    และไม่สามารถประเมินคุณภาพการให้บริการได้</p></li>
                  <li><p class="">คุกกี้เพื่อการใช้งานเว็บไซต์ (Functional Cookies)
                  </p></li>
                  <li><p class="">คุกกี้ประเภทนี้จะช่วยให้เว็บไซต์ของ สพร. จดจำตัวเลือกต่าง ๆ ที่ท่านได้ตั้งค่าไว้และช่วยให้เว็บไซต์ส่งมอบคุณสมบัติและเนื้อหาเพิ่มเติมให้ตรงกับการใช้งานของท่านได้ เช่น ช่วยจดจำชื่อบัญชีผู้ใช้งานของท่าน หรือจดจำการเปลี่ยนแปลงการตั้งค่าขนาดฟอนต์หรือการตั้งค่าต่าง ๆ
                     ของหน้าเพจซึ่งท่านสามารถปรับแต่งได้ การปิดการใช้งานคุกกี้ประเภทนี้อาจส่งผลให้เว็บไซต์ไม่สามารถทำงานได้อย่างสมบูรณ์</p></li>
                  <li><p class="">คุกกี้เพื่อการโฆษณาไปยังกลุ่มเป้าหมาย (Targeting Cookies)</p></li>
                  <li><p class="">คุกกี้ที่มีความจำเป็น (Strictly Necessary Cookies)</p></li>
                  <li><p class="">คุกกี้ประเภทนี้เป็นคุกกี้ที่เกิดจากการเชื่อมโยงเว็บไซต์ของบุคคลที่สาม ซึ่งเก็บข้อมูลการเข้าใช้งานและเว็บไซต์ที่ท่านได้เข้าเยี่ยมชม เพื่อนำเสนอสินค้าหรือบริการบนเว็บไซต์อื่นที่ไม่ใช่เว็บไซต์ของ สพร. ทั้งนี้ หากท่านปิดการใช้งานคุกกี้ประเภทนี้จะไม่ส่งผลต่อการใช้งานเว็บไซต์ของ สพร. แต่จะส่งผลให้การนำเสนอสินค้าหรือบริการบนเว็บไซต์อื่น ๆ ไม่สอดคล้องกับความสนใจของท่าน</p></li>

                </ul>
              </div>

        <h2 class="mt-4 mb-4">ตารางประเภทและตัวอย่างคุ้กกี้</h2>
        <img src="{{url('image/cookiepic1.png')}}" alt="" class="img-logo">

        <h2 class="mt-4 mb-4">ท่านจะจัดการคุกกี้ได้อย่างไร</h2>
        <p>บราวเซอร์ส่วนใหญ่จะมีการตั้งค่าให้มีการยอมรับคุกกี้เป็นค่าเริ่มต้น อย่างไรก็ตาม ท่านสามารถปฏิเสธการใช้งานหรือลบคุกกี้ในหน้าการตั้งค่าของบราวเซอร์ที่ท่านใช้งานอยู่ ทั้งนี้ หากท่านทำการปรับเปลี่ยนการตั้งค่าบราวเซอร์ของท่านอาจส่งผลกระทบต่อรูปแบบและการใช้งานบนหน้าเว็บไซต์ของเราได้ หากท่านประสงค์ที่จะทำการปรับเปลี่ยนการตั้งค่า 
            ท่านสามารถตรวจสอบรายละเอียดเพิ่มเติมได้ตามลิงก์ที่ได้ระบุไว้ข้างล่าง</p>
            <div class="li-css ms-5">
                <ul>
                    <li><a href="https://support.google.com/chrome/answer/95647?co=GENIE.Platform%3DAndroid&hl=en&oco=1">Android (Chrome)</a></li>
                    <li><a href="https://support.apple.com/en-gb/guide/safari/sfri11471/mac">Apple Safari</a></li>
                    <li><a href="https://docs.blackberry.com/content/dam/docs-blackberry-com/release-pdfs/en/device-user-guides/BlackBerry-Classic-Smartphone-10.3.3-User-Guide-en.pdf">Blackberry</a></li>
                    <li><a href="https://support.google.com/chrome/answer/95647?co=GENIE.Platform%3DDesktop&hl=en">Google Chrome</a></li>
                    <li><a href="https://support.microsoft.com/en-us/windows/microsoft-edge-browsing-data-and-privacy-bb8174ba-9d73-dcf2-9b4a-c582b4e640dd">Microsoft Edge</a></li>
                    <li><a href="https://support.microsoft.com/en-us/topic/delete-and-manage-cookies-168dab11-0753-043d-7c16-ede5947fc64d">Microsoft Internet Explorer</a></li>
                    <li><a href="https://support.mozilla.org/en-US/kb/enhanced-tracking-protection-firefox-desktop?redirectslug=enable-and-disable-cookies-website-preferences&redirectlocale=en-US">Mozilla Firefox</a></li>
                    <li><a href="https://help.opera.com/en/latest/web-preferences/">Opera</a></li>
                    <li><a href="https://support.google.com/chrome/answer/95647?co=GENIE.Platform%3DiOS&hl=en&oco=1">Iphone or Ipad (Chrome)</a></li>
                    <li><a href="https://support.apple.com/en-us/HT201265">Iphone or Ipad (Safari)</a></li>

                </ul>
            </div>
            <p>ทั้งนี้ โปรดทราบว่า หากท่านเลือกที่จะปิดการใช้งานคุกกี้บนเบราว์เซอร์หรืออุปกรณ์ของท่าน อาจส่งผลกระทบกับการทำงานบางส่วนของเว็บไซต์ของ สศท. ที่ไม่สามารถทำงานหรือให้บริการได้เป็นปกติ
                สศท. จะไม่รับผิดชอบและ สศท. ไม่ได้มีความเกี่ยวข้องกับเว็บไซต์ รวมทั้งเนื้อหาในเว็บไซต์ต่าง ๆ ที่กล่าวมาข้างบน
                สำหรับข้อมูลอื่น ๆ เพิ่มเติมในเรื่องนี้ ท่านสามารถเข้าไปอ่านได้ที่ <a href="https://www.aboutcookies.org/how-to-delete-cookies">https://www.aboutcookies.org/how-to-delete-cookies</a></p>
            <h2 class="mt-4 mb-4">การเชื่อมโยงข้อมูลกับเว็บไซต์อื่น</h2>
            <p>เว็บไซต์ของ สศท. อาจมีการเชื่อมโยงไปยังเว็บไซต์หรือโซเชียลมีเดียของบุคคลภายนอก รวมถึงอาจมีการฝังเนื้อหาหรือวีดีโอที่มาจากโซเชียลมีเดีย เช่น YouTube หรือ Facebook เป็นต้น ซึ่งจะช่วยให้ท่านเข้าถึงเนื้อหาและสร้างการปฏิสัมพันธ์กับบุคคลอื่นบนโซเชียลมีเดียจากเว็บไซต์ของ สศท. ได้ ซึ่งเว็บไซต์หรือโซเชียลมีเดียของบุคคลภายนอกจะมีการกำหนดและตั้งค่าคุกกี้ขึ้นมาเอง โดยที่ สศท. ไม่สามารถควบคุมหรือรับผิดชอบต่อคุกกี้เหล่านั้นได้ 
                และขอแนะนำให้ท่านควรเข้าไปอ่านและศึกษานโยบายหรือประกาศการใช้คุกกี้ของบุคคลภายนอกเหล่านั้นด้วย</p>
            <h2 class="mt-4 mb-4">การเปลี่ยนแปลงประกาศ</h2>
            <p>ประกาศนี้อาจมีการปรับปรุงให้เหมาะสมและสอดคล้องกับสถานการณ์และตามการให้บริการจริง โดย สศท. จะมีการแจ้งประกาศที่มีการปรับปรุงใหม่บนเว็บไซต์นี้ ดังนั้น สศท. ขอแนะนำให้ท่านตรวจสอบให้แน่ใจว่าท่านได้เข้าใจการเปลี่ยนแปลงตามข้อกำหนดดังกล่าว</p>
    <h2 class="mt-4 mb-4">ติดต่อ สศท.</h2>
    <p>ในกรณีที่ท่านมีคำถามเกี่ยวกับนโยบายคุกกี้ของเรา ท่านสามารถติดต่อสอบถามได้ที่</p>
    <p>เจ้าหน้าที่คุ้มครองข้อมูลส่วนบุคคล: DGA_pdpa@dga.or.th</p>
    <p>Call Center: contact@dga.or.th</p>
    <p>สำนักงานพัฒนารัฐบาลดิจิทัล (องค์การมหาชน) (สศท.) <br>
        Digital Government Development Agency <br>
        (Public Organization) (DGA)</p>

        </div>
        <script>
          var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
        </script>
</body>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted pt-1">
    <!-- Section: Social media -->
    
      <!-- Left -->
  
      <!-- Right -->
     
      <!-- Right -->
    
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4 fs-4">
              CONTACT US
            </h6>
            <p>
                สำนักงานพัฒนารัฐบาลดิจิทัล (องค์การมหาชน) (สพร.)
                ชั้น 17 อาคารบางกอกไทยทาวเวอร์ 108 ถนนรางน้ำ แขวงถนนพญาไท เขตราชเทวี กรุงเทพฯ 10400
            </p>
            <p class="mt-4">
                โทรสาร : (+66) 02 612 6011-12
                อีเมล : contact@dga.or.th
            </p>
            <p class="mt-4">
                งานรับ-ส่งหนังสือ และงานสารบรรณ :
                (+66) 02 612 6000
                อีเมล : saraban@dga.or.th
            </p>
            <p class="mt-4">
                DGA Contact Center :
                (+66) 02 612 6060
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 fs-4">
                SERVICE
            </h6>
            <p>
              <a href="#!" class="a-color"><b>Consulting Service</b></a>
            </p>
            <p style="margin-top: -5%">
              <a  href="#!" class="a-color"><b>Government Data Exchange : GDX</b></a>
            </p>
            <p style="margin-top: -5%">
              <a href="#!" class="a-color"><b>GovChannel</b></a>
            </p>
            <p style="margin-top: -5%">
              <a href="#!" class="a-color"><b>MailGoThai</b></a>
            </p>
            <p style="margin-top: -5%">
                <a href="#!" class="a-color"><b>Thailand e-Government</b></a>
              </p>
              <p style="margin-top: -5%">
                <a href="#!" class="a-color"><b>GNews</b></a>
              </p>
              <p style="margin-top: -5%">
                <a href="#!" class="a-color"><b>ระบบพอร์ทัลกลางเพื่อประชาชน : Citizen Portal</b></a>
              </p>
              <p style="margin-top: -5%">
                <a href="#!" class="a-color"><b>แอปพลิเคชันทางรัฐ</b></a>
              </p>
              <p style="margin-top: -5%">
                <a href="#!" class="a-color"><b>Government Smart Kiosk</b></a>
              </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 fs-4">
                OTHER
            </h6>
            <p>
              <a href="#!" class="a-color"><b>แผนที่</b></a>
            </p>
            <p style="margin-top: -5%">
              <a href="#!" class="a-color"><b>ร่วมงานกับเรา</b></a>
            </p>
            <p style="margin-top: -5%">
              <a href="#!" class="a-color"><b>แผนผังเว็บไซต์</b></a>
            </p>
            <p style="margin-top: -5%">
              <a href="#!" class="a-color"><b>ติดต่อเรา</b></a>
            </p>
            <p style="margin-top: -5%">
                <a href="#!" class="a-color"><b>แจ้งเรื่องร้องเรียนบริการ</b></a>
              </p>
              <p style="margin-top: -5%">
                <a href="#!" class="a-color"><b>การแจ้งเบาะแสและข้อร้องเรียน</b></a>
              </p>
              <p style="margin-top: -5%">
                <a href="#!" class="a-color"><b>นโยบายเว็บไซต์</b></a>
              </p>
              <p style="margin-top: -5%">
                <a href="#!" class="a-color"><b>นโยบายการรักษาความมั่นคงปลอดภัย</b></a>
              </p>
              <p style="margin-top: -5%">
                <a href="#!" class="a-color"><b>นโยบายการคุ้มครองข้อมูลส่วนบุคคล</b></a>
              </p>
              <p style="margin-top: -5%">
                <a href="#!" class="a-color"><b>ขั้นตอนการแจ้ง Take Down Notice</b></a>
              </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 fs-4">
              Contact
            </h6>
            <a href="https://www.facebook.com/DGAThailand/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/DGAThailand/" class="fa fa-twitter"></a>
            <a href="https://www.youtube.com/c/DGAThailand" class="fa fa-youtube"></a>

            

          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <p class="text-center">สงวนลิขสิทธิ์ พ.ศ. 2558 ตามพระราชบัญญัติลิขสิทธิ์ 2537 สำนักงานพัฒนารัฐบาลดิจิทัล (องค์การมหาชน) (สพร.)</p>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</html>