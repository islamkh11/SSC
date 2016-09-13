<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// function lang 
function  lang ($ph , $index = NULL){
    global $user_lang;
    static $lang = array(
        // sitting main ::
        'Basic Info'=>['Basic Info','المعلومات الاساسية'],
        'Email Info'=>['Login Info','معلومات الدخول'],
        'Password Info'=>['Password','كلمة المرور'],
        'Display Info'=>['Display','الظهور'],
        'Image & Color Info'=>['Image & Color','الصورة و الالوان'],
        'Language Info'=>['Language','اللغة'],
        'Delete Account'=>['Delete Account','حذف الحساب'],
        'fullName'=>['Full Name','<h3>الاسم الكامل</h3>'],
        'dateOfBirth'=>['DATE OF BIRTH','<h3>تاريخ الميلاد</h3>'],
        'gen'=>['SELECT GENDER','<h3>اختيار النوع</h3>'],
        'update'=>['UPDATE','<h4>تحديث</h4>'],
        'oldpass'=>['CURRENT PASSWORD','<h3>كلمة المرور الحالية </h3>'],
        'newpass'=>['NEW PASSWORD','<h3>كلمة المرور </h3>'],
        'renewpass'=>['REENTER PASSWORD','<h3>اعادة كلمة المرور </h3>'],
        'updateinfo'=>['<div class="alert alert-success fonted text-center"><h4>Your Info Successfuly Updated</h4></div>',
            '<div class="alert alert-success text-center"><h4>تم تحديث بياناتك بنجاح</h4></div>'],
        'uploadPic'=>['UPLOAD NEW PIC','<h3>رفع صورة جديدة</h3>'],
        'chooseColor'=>['Choose Color','<h4>اختيار اللون</h4>'],
        'chooseLang'=>['Choose Language','<h4>اختيار اللغة</h4>'],
        ''=>['',''],
        ''=>['',''],
        ''=>['',''],
        ''=>['',''],
        ''=>['',''],
        ''=>['',''],
        ''=>['',''],
        ''=>['',''],
        // header view
        'pattonHL'=>['PATTON  71','الخلية 71'],
        'homeHL'=>['HOME','الرئيسية'],
        'coursesHL'=>['COURSES','المقررات'],
        'profileHL'=>['PROFILE','الصفحة الشخصية'],
        'settingHL'=>['SETTING','الاعدادات'],
        'questionHL'=>['QUESTION','الاسئلة'],
        'helpHL'=>['HELP','مساعدة'],
        'electionHL'=>['Election','الترشح'],
        // question page
        'Recent Questions'=>['Recent Questions',''],
        'Recent Answers'=>['Recent Answers',''],
        // global page ::
            'mainH2'=>['Global Section For All Departments','صفحة عامة لكل الاقسام'],
            'comment'=>['Comments','التعليقات'],
            'electH3'=>['do you want to elect him/her to Patton71 ? ','هل تريد اختياره ليصبح جزءا من الخلية 71 ؟'],   
            'successElect'=>['<h4>Thank You For Choosing Future Of </h4><img src="../uploads/site/brandy.PNG" style="height: 30px;">',
                '<h4>شكرا لاختيارك مستقبل </h4><img src="../uploads/site/brandy.PNG" style="height: 30px;">'],
            ''=>['',''],
            ''=>['',''],
        // courses page ::
             // posts 
                'desq'=>['what do you want to post ....','ماذا تريد ان تنشر .....'],
                'posted'=>['Post','نشر'],
                'report'=>['report','تقرير'],
                'getNotify'=>['Get Notifications','احصل على الاشعارات'],
                'addToFav'=>['Add To Favourite','اضافة الى المفضلة'],
                'hidden'=>['<div class="alert alert-danger"><h3>This Content Is <strong>Deleted</strong></h3></div>',
                           '<div class="alert alert-danger"><h3> هذا المحتوى تم <strong>حذفه</strong></h3></div>'],
                'unlink'=>['Unlink','حذف'],
              // lectures
                'lecture title'=>['Lecture Title','عنوان المحاضرة'],
                'lecture desq'=>['Lecture Description','وصف المحاضرة'],
              // books
                'book title'=>['Book Title','عنوان الكتاب'],
                'book desq'=>['Book Description','وصف الكتاب'],
             // multimedia
                'more'=>['More','المزيد'],
                'multimedia title'=>['Multimedia Title','عنوان المحتوى'],
                'multimedia desq'=>['Multimedia Description','وصف المحتوى'],
        // profile ::
            // acadimic id
            'hscon'=>['Academic Card','البطاقة الجامعى'],
            'name'=>['Name','الاسم'],
            'major'=>['Major','التخصص الرئيسى'],
            'minor'=>['Minor','التخصص الفرعى'],
            'acadimic_id'=>['ID Num','الرقم الجامعى'],
            ''=>['',''], 
            // time table
            'Sa'=>['Saturday','السبت'],
            'Su'=>['Sunday','الاحد'],
            'Mo'=>['Monday','الاثنين'],
            'Tu'=>['Tuesday','الثلاثاء'],
            'We'=>['Wednesday','الاربعاء'],
            'Th'=>['Thursday','الخميس'],
            'time table'=>['Timetable','جدول المواعيد'],
            // fav
            'favTitle'=>['Your Favourites','القائمة المفضلة'],
            'comments'=>['Comments','التعليقات'],
            // level stat // regi   depar majo mino natu biol geol
            'regi'=>['Student Courses Registration','تسجيل مقررات الطالب'],
            'depar'=>['Branch','القسم'],
            'majo'=>['Major','التخصص الرئيسى'],   
            'mino'=>['Minor','التخصص الفرعى '],
            'natu'=>['Natural Science','العلوم الطبيعية'],
            'biol'=>['Biological Science','علم الاحياء'],
            'geol'=>['Geology Science','الجيولوجيا'],
        // choo:أختر المواد:Choose Your Materials-firl:المستوى الأول:First Level-::-::-::-::
            'choo'=>['Choose Your Materials','اختر مقرراتك الدراسية'],
            'firl'=>['First Level','المستوى الأول'],   
            'depar'=>['Department','قسم'],
            ''=>['',''],
            ''=>['',''],   
        ''=>['',''],
            ''=>['',''],
            ''=>['',''],   
        ''=>['',''],
            ''=>['',''],
            ''=>['',''],   
        ''=>['',''],
            ''=>['',''],
            ''=>['',''],
        // canidata
        'h2con'=>['be the leadership you want to follow','كن  القيادة التى  تتمنى اتباعها'],
        'succesCanad'=>['<strong>Succes</strong> Add Your Posts , You Just Start Your Way To Be <strong>Patton 71</strong> ',
            'تم اضافة منشوراتك , لقد بدات للتو رحلتك لتكون فردا من الخلية 71'],
        'postcon'=>[
                    ['what is your main catchword ?','ما هو شعارك العام للخلية 71 ؟ '],
                    ['what is your professional skills?','ما هى مهاراتك المهنية ؟ '],
                    ['what is your personal skills?','ما هى مهاراتك الشخصية ؟ '],
                    ['what is your ideas to improve social site ?','ما هى افكارك لتطوير موقع التواصل ؟ '],
                    ['what is your ideas to use the learning open sources and contact it with the site ?','ما هى افكارك عن الاستفادة من  مصادر التعلم الحر و ربطها بالموقع ؟'],
                    ['what is your ideas to build parllel learning methodology ?','ما هى افكارك لبناء منهج تعلم موازى ؟'],
                    ['what is your ideas to improve students personal skills ?','ما هى افكارك لتطوير مهارات الطلاب الاساسية   ؟'],
                    ['are you member of GSI ? if yes what is your ideas to improve it ?','هل انت عضو فى مجموعة مستثمرى علوم  ؟ و اذا كانت اجابتك نعم هل لديك افكار لتطويرها ؟ '],
                    ['what you want to add ?','ماذا تحب ان تضيف ؟'] ],
        'headCanid'=>['Be Canadiat','كن منافسا']
    );
    $langIndex = ($user_lang == 'ar') ? 1 : 0; 
    if (!isset($index))
        return $lang[$ph][$langIndex]; 
    else return $lang[$ph][$index][$langIndex];
}

// function getlang 
function getLang ($ph , $op=NULL){
    static $getlang = array(
        // index page ::
        'SEARCH'=>['SEARCH','<div style="font-size: 25px;">البحث</div>'],
        'QUESTIONS'=>['QUESTIONS','<div style="font-size: 25px;color: #FFF;">الاسئلة</div>'],
        'FAOFSCI'=>['FACULTY OF SCIENCE','<div style="font-size: 25px;">كلية العلوم جامعة الإسكندرية</div>'],
        'lead'=>['The First Social Network For Faculty Of Science','<div style="font-size: 35px;color: #FFF;">أول موقع تواصل إجتماعى لكلية العلوم </div>'],
        'SL'=>['Sign Up & Login','تسجيل الدخول'],
        // Features
        'FeaturesH2'=>['Our Features','المميزات'],
        'InteractiveL'=>['Interactive','متفاعل'],
        'InteractiveH'=>['Interact with your friends through conversation , publishing and communication','تتفاعل مع اصدقائك عبر المحادثة, ونشر الرسائل '],
        'ProfileL'=>['Profile','الملف الشخصى'],
        'ProfileH'=>['Make your profile expressed your character and your needs','إجعل ملفك الشخصى يعبر عن شخصيتك وإحتياجاتك'],
        'PrivacyL'=>['Privacy','الخصوصه'],
        'PrivacyH'=>['Enjoy with high level  of privacy through protect your personal data and a high level of safety','تتمتع بدرجة عالية من الخصوصية من خلال حماية البيانات الشخصية على مستوى عال من الامان'],
        'CompatibilityL'=>['Compatibility','التوافق'],
        'CompatibilityH'=>['Compatible for All Devices and Android Phones with Full Features','متوافق مع جميع اجهزه الهواتف ,ومع هواتف الأندرويد بمميزاته الكاملة'],
        'ExplanationL'=>['Explanation','الشرح'],
        'ExplanationH'=>['Explain of the College System To First Level and New Students','شرح منظومة الجامعة لطلاب المستوى الأول والطلاب الجدد'],
        'KnowledgeL'=>['Knowledge','المعرفه'],
        'KnowledgeH'=>['Exchanges of Information for Each Course and Increase Knowledge for All','تبادل المعلومات عن كل دورة وزيادة المعرفة للجميع'],
        'FlexibleL'=>['Flexible','المرونه'],
        'FlexibleH'=>['Flexible and Easy System for Registration of Branches and Courses for Students','يتسم بالمرونة وسهولة نظام لتسجيل الفروع ومواد للطلاب'],
        'SupportL'=>['Support','الدعم'],
        'SupportH'=>['Support 24/7 for All Questions and Errors and Solve It in Fastest Time','دعم 24 ساعه طوال أيام الأسبوع لكل الاسئلة والاخطاء وحلها فى اسرع وقت'],
        // stat
        'StatH1'=>['Our Main Statistics','إحصائياتنا'],
        'SUsers'=>['Satisfied Users','مستخدم راضى'],
        'PComm'=>['Posted Comments','تعليق منشور'],
        'Online'=>['Online Now','متصل الآن'],
        // statis
        'rate'=>['Our Rate','تقديراتنا'],
        'total'=>['total','الكل'],
        //team
        'team'=>['Our Team','فريق العمل '],
        // contact 
        'contactH1'=>['Contact Us','تواصل معنا'],
        'placeUser'=>['Username','اسم المستخدم'],
        'placeEmail'=>['Email','البريد الاليكترونى'],
        'message'=>['Your Message','محتوى الرسالة'],
        'sub'=>['Contact Us','تواصل معنا'],
        // faculty of science :: 
        'branchH2'=>['BREANCHES','الاقسام'],
        // registration  ::
        'joinUs'=>['Join Us','انضم الينا'],
        'Registration'=>['Registration','التسجيل'],
        'fname'=>['First Name','الاسم الاول'],
        'sname'=>['Second Name','الاسم الثانى'],
        'uname'=>['Username','اسم المستخدم'],
        'emai'=>['Email','البريد الالكترونى'],
        'passw'=>['Password','كلمة المرور'],
        'repassw'=>['RePassword','اعادة كلمة المرور'],
        'iid'=>['ID','الرقم الجامعى'],
        'bran'=>['Branch','القسم'],
        'majo'=>['Major','التخصص الرئيسى'],
        'mino'=>['Minor','التخصص الفرعى'],
        'da'=>['Day','اليوم'],
        'mon'=>['Month','الشهر'],
        'yea'=>['Year','السنة'],
        'gend'=>['Gender','النوع'],
        'mal'=>['Male','ذكر'],
        'fem'=>['Female','انثى'],
        'signup'=>['Sign Up','التسجيل'],
        
        ''=>['',''],
        ''=>['',''],
        ''=>['',''],
        ''=>['',''],
        ''=>['',''],
        
        ''=>['','']
        
        
    );
    if (getUserLang()) { return $ans = (getUserLang() == 'ar') ? $getlang[$ph][1] : $getlang[$ph][0]  ;}
        return $ans = (isset ($_GET['arabic'])) ? $getlang[$ph][1] : $getlang[$ph][0] ;
}