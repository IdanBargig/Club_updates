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
