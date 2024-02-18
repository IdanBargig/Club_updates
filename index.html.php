<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>עדכוני מסיבות</title>
    <style>
        /* סגנון להגדרת צבע הלינק לשחור */
        a {
            color: black;
            font-weight: bold; /* גופן מודגש (בולט) */
            text-decoration: none; /* להסיר קווים תחתונים מהלינק */
        }

        /* סגנון עבור לינק כאשר המשתמש מעביר עליו את העכבר */
        a:hover {
            text-decoration: underline; /* הוספת קו תחתון בעת העברת העכבר */
        }
    </style>

    <style>
        body {
            animation: changeColor 30s infinite;
        }

        @keyframes changeColor {
            0%,
            100% {
                background-color: #FF0000;
            }

            10% {
                background-color: #FF4500;
            }

            20% {
                background-color: #FF8C00;
            }

            30% {
                background-color: #FFD700;
            }

            40% {
                background-color: #ADFF2F;
            }

            50% {
                background-color: #32CD32;
            }

            60% {
                background-color: #00FF7F;
            }

            70% {
                background-color: #00CED1;
            }

            80% {
                background-color: #4169E1;
            }

            90% {
                background-color: #8A2BE2;
            }
        }
    </style>
</head>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>סטטיסטיקות צפיות</title>
</head>
<body>
    <h1>סטטיסטיקות צפיות</h1>
    <p>כמות הצפיות באתר: <?php include('counter.php'); ?></p>
    <!DOCTYPE html>
    <html>
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>עדכוני מסיבות</title>
        <style>
            /* סגנון להגדרת צבע הלינק לשחור */
            a {
                color: black;
                font-weight: bold; /* גופן מודגש (בולט) */
                text-decoration: none; /* להסיר קווים תחתונים מהלינק */
            }
    
            /* סגנון עבור לינק כאשר המשתמש מעביר עליו את העכבר */
            a:hover {
                text-decoration: underline; /* הוספת קו תחתון בעת העברת העכבר */
            }
        </style>
    
        <style>
            body {
                animation: changeColor 30s infinite;
            }
    
            @keyframes changeColor {
                0%,
                100% {
                    background-color: #FF0000;
                }
    
                10% {
                    background-color: #FF4500;
                }
    
                20% {
                    background-color: #FF8C00;
                }
    
                30% {
                    background-color: #FFD700;
                }
    
                40% {
                    background-color: #ADFF2F;
                }
    
                50% {
                    background-color: #32CD32;
                }
    
                60% {
                    background-color: #00FF7F;
                }
    
                70% {
                    background-color: #00CED1;
                }
    
                80% {
                    background-color: #4169E1;
                }
    
                90% {
                    background-color: #8A2BE2;
                }
            }
        </style>
    </head>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>סטטיסטיקות צפיות</title>
    </head>
    <body>
        <h1>סטטיסטיקות צפיות</h1>
        <p>כמות הצפיות באתר: <?php include('counter.php'); ?></p>
        <?php
        // הפעולה נוצרת או נטענת בכל פעם שהדף מתרענן
        function updateCounter() {
            $counterFile = 'counter.txt';
        
            // בדיקה האם קובץ המונה קיים
            if (file_exists($counterFile)) {
                // קריאת התוכן הנוכחי של קובץ המונה
                $counterContent = file_get_contents($counterFile);
        
                // המרת התוכן למספר שלם
                $counter = (int)$counterContent;
        
                // עדכון המונה
                $counter++;
        
                // כתיבת המונה המעודכן לקובץ
                file_put_contents($counterFile, $counter);
        
                // עדכון הצפיות במסד נתונים או בכל פעם שתיקרה פעולה מתאימה לדרישותיך
                updateDatabase($counter);
            } else {
                // אם קובץ המונה לא קיים, ניתן ליצור אותו
                file_put_contents($counterFile, 1);
        
                // ולעדכן הצפיות במסד נתונים
                updateDatabase(1);
            }
        }
        
        // פונקציה לעדכון הצפיות במסד נתונים - ניתן להתאים למסד הנתונים שלך
        function updateDatabase($counter) {
            // קוד לעדכון הצפיות במסד נתונים
            // יש להתאים את הקוד לסוג המסד נתונים שאתה משתמש בו
        }
        
        // קריאה לפונקציה לעדכון המונה
        updateCounter();
        
        // החזרת המונה נוכחי להצגה בדף
        $counterFile = 'counter.txt';
        echo file_get_contents($counterFile);
        ?>
    </body>
    
    <body>
    
        <header>
            <h1>Club Updates</h1>
        </header>
    
        <!-- Navigation Links -->
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="page1.html">מסיבות בוגרים</a></li>
                <li><a href="page2.html">מסיבות נוער</a></li>
                <!-- Add more navigation links as needed -->
            </ul>
        </nav>
    
        <!-- Main Content -->
        <main>
            <!-- Club 1 -->
            <div class="club1">
                <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65b9a4b837a19a67006170fd1706665260749_coverImage.jpg" alt="Club Image" width="100" height="100">
                <a href="https://www.go-out.co/event/1706665144540?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> HAMISHI HAVERI • PURIM PARTY <br> 21 March <br> 23:00 - 06:00 </a>
            </div>
            <br>
            <br>
        <!-- Club 2 -->
        <div class="club2">
            <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65b99e7af7787b634cfb3ee71706663544122_coverImage.jpg" alt="Club Image" width="100" height="100">
            <a href="https://www.go-out.co/event/1706663452853?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> SHISHI HAVERI • PURIM PARTY <br> 22 March <br> 23:00 - 05:00 </a>
        </div>
        <br>
        <!-- Club 3 -->
        <div class="club3">
            <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65adb595915f1cc01772a0271706909445084_coverImage.jpg" alt="Club Image" width="100" height="100">
            <a href="https://www.go-out.co/event/1705883029587?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> PURIM HAMAM FESTIVAL <br> 21 March <br> 23:00 - 06:00 </a>
        </div>
        <br>
        <!-- Club 4 -->
        <div class="club4">
            <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65b1250e0bcaaf7e5833ba021706907197595_coverImage.jpg" alt="Club Image" width="100" height="100">
            <a href="https://www.go-out.co/event/1706108053686?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> PURIM FESTIVAL • COLORFUL 🪐 <br> 21 March <br> 23:00 - 07:00 </a>
        </div>
        <br>
        <!-- Club 5 -->
        <div class="club5">
            <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65adb4d0930fb50afa1000301706911072552_coverImage.jpg" alt="Club Image" width="100" height="100">
            <a href="https://www.go-out.co/event/1705882832368?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> PURIM HAMAM FESTIVAL <br> 22 March <br> 23:00 - 06:00 </a>
        </div>
        <br>
        <!-- Club 6 -->
        <div class="club6">
            <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65b868f19121704963cbc7921706584302094_coverImage.jpg" alt="Club Image" width="100" height="100">
            <a href="https://www.go-out.co/event/1706584233789?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> HANGAR TLV • PURIM FESTIVAL 🎺 <br> 22 March <br> 23:00 - 06:00 </a>
        </div>
        <br>
        <!-- Club 7 -->
        <div class="club7">
            <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65b9b5e1ae889ebe778f53631707058490105_coverImage.jpg" alt="Club Image" width="100" height="100">
            <a href="https://www.go-out.co/event/1706669483528?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> PURIM PSYTRIX FESTIVAL <br> 23 March <br> 22:00 - 08:00 </a>
        </div>
        <br>
        <!-- Club 8 -->
        <div class="club8">
            <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65b1b5af11fc387e43e893561706911847037_coverImage.jpg" alt="Club Image" width="100" height="100">
            <a href="https://www.go-out.co/event/1706145199649?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> PURIM HAMAM FESTIVAL  <br> 23 March <br> 23:00 - 05:00 </a>
        </div>
        <br>
        <!-- Club 9 -->
        <div class="club9">
            <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65ad636f894f520af46b08031705861998478_coverImage.jpg" alt="Club Image" width="100" height="100">
            <a href="https://www.go-out.co/event/1705861685468?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> PURIM HAMAM FESTIVAL <br> 24 March <br> 23:00 - 05:00 </a>
        </div>
        <br>
        <!-- Club 10 -->
        <div class="club1">
            <img src="https://static.get-in.com/gallery/tablet_cover_20240213_161726_305412.png" width="100" height="100">
            <a href="https://api.get-in.com/en/305412?seller_code=tYnYdSnryep" class="club-link" onclick="incrementViewCount()"> Duplex Purim <br> Mar 24 <br> 10:30 PM </a>
        </div>
        <br>
        <!-- Club 11 -->
        <div class="club2">
            <img src="https://static.get-in.com/gallery/tablet_cover_20240129_171307_303200.png" width="100" height="100">
            <a href="https://api.get-in.com/en/303200?seller_code=tYnYdSnryep" class="club-link" onclick="incrementViewCount()"> ELECTION PARTY - By Atmosphere <br> Feb 26 <br> 10:30 PM </a>
        </div>
        <br>
        <!-- Club 12 -->
        <div class="club10">
            <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65c7852f11eb38c4dc70d7641707574574181_coverImage.jpg" alt="Club Image" width="100" height="100">
            <a href="https://www.go-out.co/event/kishkush?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> Kish-Kush Festival - HAMAM <br> 29 February <br> 23:00 - 05:30 </a>
        </div>
    </div>
        </main>
    
    </body>
    
    </html>
</body>

<body>

    <header>
        <h1>Club Updates</h1>
    </header>

    <!-- Navigation Links -->
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="page1.html">מסיבות בוגרים</a></li>
            <li><a href="page2.html">מסיבות נוער</a></li>
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>

    <!-- Main Content -->
    <main>
        <!-- Club 1 -->
        <div class="club1">
            <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65b9a4b837a19a67006170fd1706665260749_coverImage.jpg" alt="Club Image" width="100" height="100">
            <a href="https://www.go-out.co/event/1706665144540?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> HAMISHI HAVERI • PURIM PARTY <br> 21 March <br> 23:00 - 06:00 </a>
        </div>
        <br>
        <br>
    <!-- Club 2 -->
    <div class="club2">
        <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65b99e7af7787b634cfb3ee71706663544122_coverImage.jpg" alt="Club Image" width="100" height="100">
        <a href="https://www.go-out.co/event/1706663452853?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> SHISHI HAVERI • PURIM PARTY <br> 22 March <br> 23:00 - 05:00 </a>
    </div>
    <br>
    <!-- Club 3 -->
    <div class="club3">
        <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65adb595915f1cc01772a0271706909445084_coverImage.jpg" alt="Club Image" width="100" height="100">
        <a href="https://www.go-out.co/event/1705883029587?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> PURIM HAMAM FESTIVAL <br> 21 March <br> 23:00 - 06:00 </a>
    </div>
    <br>
    <!-- Club 4 -->
    <div class="club4">
        <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65b1250e0bcaaf7e5833ba021706907197595_coverImage.jpg" alt="Club Image" width="100" height="100">
        <a href="https://www.go-out.co/event/1706108053686?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> PURIM FESTIVAL • COLORFUL 🪐 <br> 21 March <br> 23:00 - 07:00 </a>
    </div>
    <br>
    <!-- Club 5 -->
    <div class="club5">
        <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65adb4d0930fb50afa1000301706911072552_coverImage.jpg" alt="Club Image" width="100" height="100">
        <a href="https://www.go-out.co/event/1705882832368?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> PURIM HAMAM FESTIVAL <br> 22 March <br> 23:00 - 06:00 </a>
    </div>
    <br>
    <!-- Club 6 -->
    <div class="club6">
        <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65b868f19121704963cbc7921706584302094_coverImage.jpg" alt="Club Image" width="100" height="100">
        <a href="https://www.go-out.co/event/1706584233789?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> HANGAR TLV • PURIM FESTIVAL 🎺 <br> 22 March <br> 23:00 - 06:00 </a>
    </div>
    <br>
    <!-- Club 7 -->
    <div class="club7">
        <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65b9b5e1ae889ebe778f53631707058490105_coverImage.jpg" alt="Club Image" width="100" height="100">
        <a href="https://www.go-out.co/event/1706669483528?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> PURIM PSYTRIX FESTIVAL <br> 23 March <br> 22:00 - 08:00 </a>
    </div>
    <br>
    <!-- Club 8 -->
    <div class="club8">
        <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65b1b5af11fc387e43e893561706911847037_coverImage.jpg" alt="Club Image" width="100" height="100">
        <a href="https://www.go-out.co/event/1706145199649?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> PURIM HAMAM FESTIVAL  <br> 23 March <br> 23:00 - 05:00 </a>
    </div>
    <br>
    <!-- Club 9 -->
    <div class="club9">
        <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65ad636f894f520af46b08031705861998478_coverImage.jpg" alt="Club Image" width="100" height="100">
        <a href="https://www.go-out.co/event/1705861685468?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> PURIM HAMAM FESTIVAL <br> 24 March <br> 23:00 - 05:00 </a>
    </div>
    <br>
    <!-- Club 10 -->
    <div class="club1">
        <img src="https://static.get-in.com/gallery/tablet_cover_20240213_161726_305412.png" width="100" height="100">
        <a href="https://api.get-in.com/en/305412?seller_code=tYnYdSnryep" class="club-link" onclick="incrementViewCount()"> Duplex Purim <br> Mar 24 <br> 10:30 PM </a>
    </div>
    <br>
    <!-- Club 11 -->
    <div class="club2">
        <img src="https://static.get-in.com/gallery/tablet_cover_20240129_171307_303200.png" width="100" height="100">
        <a href="https://api.get-in.com/en/303200?seller_code=tYnYdSnryep" class="club-link" onclick="incrementViewCount()"> ELECTION PARTY - By Atmosphere <br> Feb 26 <br> 10:30 PM </a>
    </div>
    <br>
    <!-- Club 12 -->
    <div class="club10">
        <img src="https://d15q6k8l9pfut7.cloudfront.net/events/65c7852f11eb38c4dc70d7641707574574181_coverImage.jpg" alt="Club Image" width="100" height="100">
        <a href="https://www.go-out.co/event/kishkush?ref=a3ii9aiag1" class="club-link" onclick="incrementViewCount()"> Kish-Kush Festival - HAMAM <br> 29 February <br> 23:00 - 05:30 </a>
    </div>
</div>
    </main>

</body>

</html>
