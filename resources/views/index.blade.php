<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cookie-consent.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    
    <title>Document</title>
</head>
<body>

    <div role="dialog" aria-labelledby="lcc-modal-alert-label" 
            aria-describedby="lcc-modal-alert-desc" aria-modal="true" 
            class="lcc-modal lcc-modal--alert js-lcc-modal js-lcc-modal-alert" 
            style="display: none;"
            data-cookie-key="__cookie_consent"
            data-cookie-value-both="true"
            data-cookie-value-none="false"
            data-cookie-value-analytics="2"
            data-cookie-value-marketing="3"
            data-cookie-expiration-days="365">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="lcc-modal__content">
                    <p class="ms-0 ">เราใช้คุกกี้เพื่อพัฒนาประสิทธิภาพ และประสบการณ์ที่ดีในการใช้เว็บไซต์ของคุณ 
                        คุณสามารถศึกษารายละเอียดได้ที่ นโยบายคุ้กกี้ และสามารถจัดการความเป็นส่วนตัวเองได้ของคุณ
                        ได้เองโดยคลิกที่ปุ่มตั้งค่า</h2>

                    </p>
                 </div>
            </div>
            <div class="col-md-4">
                <div class="lcc-modal__actions">

                    <button id="btn-b" type="button" class="lcc-button lcc-button--link js-lcc-settings-toggle" style="margin-left: 120px">
                         <p class="fs-6" style="color: green" data-bs-toggle="modal" data-bs-target="#exampleModal">ตั้งค่าคุกกี้</p>
                    </button>
                    <button type="button" class="mb-2 lcc-button js-lcc-accept btn btn-primary btn-lg" style="margin-left: 50px">
                       ยอมรับ
                    </button>
                </div>
            </div>

        </div>
    </div>
               
               
    </div>
  


    <div role="dialog" aria-labelledby="lcc-modal-settings-label" aria-describedby="lcc-modal-settings-desc" 
                aria-modal="true" class="lcc-modalsetting lcc-modal--settings js-lcc-modal js-lcc-modal-settings" style="display: none;"
                
                >

                <button id="close-btn" class="lcc-modal__close js-lcc-settings-toggle" type="button">
                    <span class="lcc-u-sr-only">
                        Sluiten
                    </span>
                    &times;
                </button>
                
                <div class="lcc-modal__content">
                    <div class="lcc-modal__content">
                            <h1 id="lcc-modal-settings-label" class="lcc-modal__title mt-3 fs-5"><b>ตั้งค่าความเป็นส่วนตัว</b></h1>
                            <p id="lcc-modal-settings-desc" class="lcc-text">
                                คุณสามารถเลือกการตั้งค่าคุกกี้โดยเปิด/ปิด คุกกี้ในแต่ละประเภทได้ตามความต้องการ ยกเว้น คุกกี้ที่จำเป็น
                            <div class="lcc-modal__section lcc-u-text-center">
                                <button type="button" class="lcc-button js-lcc-accept btn btn-primary">
                                    ยอมรับทั้งหมด
                                </button>
                            </div>
                                <hr width=100% size=5 >

                                <h1 class="mt-3 fs-5"><b>จัดการความเป็นส่วนตัว</b></h1>


                            <div class="lcc-modal__section mt-3">

                                <label for="lcc-checkbox-essential" class="lcc-label">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="lcc-checkbox-essential"disabled="disabled" checked>
                                        <span >คุกกี้ที่มีความจำเป็น (Strictly Necessary Cookies)</span>
                                        <p class="lcc-text mt-2">
                                            คุกกี้ประเภทนี้มีความจำเป็นต่อการให้บริการเว็บไซต์ของ สพร. เพื่อให้ท่านสามารถเข้าใช้งานในส่วนต่าง ๆ ของเว็บไซต์ได้ รวมถึงช่วยจดจำข้อมูลที่ท่านเคยให้ไว้ผ่านเว็บไซต์ การปิดการใช้งานคุกกี้ประเภทนี้จะส่งผลให้ท่านไม่สามารถใช้บริการในสาระสำคัญของ สพร. ซึ่งจำเป็นต้องเรียกใช้คุกกี้ได้
                                        </p>
                                    </div>
                                </label> 
                            </div>

                            <div class="lcc-modal__section">
                                <label for="lcc-checkbox-analytics" class="lcc-label">
                                    <div class="form-check form-switch">

                                    <input class="form-check-input" type="checkbox" id="lcc-checkbox-analytics">
                                    <span>คุกกี้เพื่อการวิเคราะห์และประเมินผลการใช้งาน (Performance Cookies)</span>
                                    <p class="lcc-text">
                                        คุกกี้ประเภทนี้ช่วยให้ สพร. ทราบถึงการปฏิสัมพันธ์ของผู้ใช้งานในการใช้บริการเว็บไซต์ของ สพร. รวมถึงหน้าเพจหรื
                                        อพื้นที่ใดของเว็บไซต์ที่ได้รับความนิยม ตลอดจนการวิเคราะห์ข้อมูลด้านอื่น ๆ สพร. ยังใช้ข้อมูลนี้เพื่อการปรับปรุงการทำ
                                        งานของเว็บไซต์ และเพื่อเข้าใจพฤติกรรมของผู้ใช้งานมากขึ้น ถึงแม้ว่า ข้อมูลที่คุกกี้นี้เก็บรวบรวมจะเป็นข้อมูลที่ไม่สามาร
                                        ถระบุตัวตนได้ และนำมาใช้วิเคราะห์ทางสถิติเท่านั้น การปิดการใช้งานคุกกี้ประเภทนี้จะส่งผลให้ สพร. ไม่สามารถทราบป
                                        ริมาณผู้เข้าเยี่ยมชมเว็บไซต์ และไม่สามารถประเมินคุณภาพการให้บริการได้                    
                                    </p>
                                </div>
                                </label>
                            </div>

                            <div class="lcc-modal__section">
                                <label for="lcc-checkbox-marketing" class="lcc-label">
                                    <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="lcc-checkbox-marketing">
                                    <span>คุกกี้เพื่อการใช้งานเว็บไซต์ (Functional Cookies)</span>
                                    <p class="lcc-text">
                                        คุกกี้ประเภทนี้จะช่วยให้เว็บไซต์ของ สพร. จดจำตัวเลือกต่าง ๆ ที่ท่านได้ตั้งค่าไว้และช่วยให้เว็บไซต์ส่งมอบคุณสมบัติแล
                                        ะเนื้อหาเพิ่มเติมให้ตรงกับการใช้งานของท่านได้ เช่น ช่วยจดจำชื่อบัญชีผู้ใช้งานของท่าน หรือจดจำการเปลี่ยนแปลงการตั้
                                        งค่าขนาดฟอนต์หรือการตั้งค่าต่าง ๆ ของหน้าเพจซึ่งท่านสามารถปรับแต่งได้ การปิดการใช้งานคุกกี้ประเภทนี้อาจส่งผลให้เ
                                        ว็บไซต์ไม่สามารถทำงานได้อย่างสมบูรณ์</p>
                                </div>
                                </label>
                            </div>

                            <div class="lcc-modal__section">
                                <label for="lcc-checkbox-analytics" class="lcc-label">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="lcc-checkbox-analytics">
                                        <span>คุกกี้เพื่อการโฆษณาไปยังกลุ่มเป้าหมาย (Targeting Cookies)</span>
                                        <p class="lcc-text">
                                            คุกกี้ประเภทนี้เป็นคุกกี้ที่เกิดจากการเชื่อมโยงเว็บไซต์ของบุคคลที่สาม ซึ่งเก็บข้อมูลการเข้าใช้งานและเว็บไซต์ที่ท่
                                            านได้เข้าเยี่ยมชม เพื่อนำเสนอสินค้าหรือบริการบนเว็บไซต์อื่นที่ไม่ใช่เว็บไซต์ของ สพร. ทั้งนี้ หากท่านปิดการใช้
                                            งานคุกกี้ประเภทนี้จะไม่ส่งผลต่อการใช้งานเว็บไซต์ของ สพร. แต่จะส่งผลให้การนำเสนอสินค้าหรือบริการบนเว็บไ
                                            ซต์อื่น ๆ ไม่สอดคล้องกับความสนใจของท่าน                        
                                        </p>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                                    <div class="lcc-modal__actions d-flex justify-content-center">
                                        <button type="button" class="lcc-button js-lcc-settings-save btn btn-primary ">
                                            บันทึกการตั้งค่า
                                        </button>
                                    </div>
    </div>

    <div class="lcc-backdrop js-lcc-backdrop" style="display: none;"></div>


    
    <script>
        $('#btn-b').click(function(){
            $('.lcc-modal').css("-webkit-filter","blur(2px)");
    });
    $("#close-btn").click(function(){
      $('.lcc-modal').css("filter","");
    });
   
    </script>
    <script src="./js/cookie-consent.js"></script>
</body>
</html>