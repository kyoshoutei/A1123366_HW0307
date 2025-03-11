<html>

<head>
    <title>迎新活動行程與報名表</title>
    <meta charset="utf-8">
</head>

<body bgcolor="#D2E9FF">
    <center><font face="標楷體">
        <h1>꒷꒦︶꒷꒦︶ ๋ ࣭ ⭑꒷꒦ 高大資管迎新活動行程 ꒷꒦︶꒷꒦︶ ๋ ࣭ ⭑꒷꒦</h1>

        <h3>&nbsp;活動時間：2025.04.01 9:00 ～ 17:00</h3>
        <h3>&nbsp;活動地點：高雄大學&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
        <TABLE BORDER>
            <tr>
                <th>時間</th>
                <th>活動內容</th>
            </tr>

            <tr>
                <td>&nbsp;09:00 - 09:30&nbsp;</td>
                <td>&nbsp;報到</td>
            </tr>

            <tr>
                <td>&nbsp;09:30 - 10:00&nbsp;</td>
                <td>&nbsp;迎新開幕、學長姐分享</td>
            </tr>

            <tr>
                <td>&nbsp;10:00 - 11:30&nbsp;</td>
                <td>&nbsp;破冰遊戲 & 團隊合作挑戰</td>
            </tr>

            <tr>
                <td>&nbsp;11:30 - 13:00&nbsp;</td>
                <td>&nbsp;午餐 & 交流時間</td>
            </tr>

            <tr>
                <td>&nbsp;13:00 - 15:00&nbsp;</td>
                <td>&nbsp;校園尋寶遊戲</td>
            </tr>

            <tr>
                <td>&nbsp;15:00 - 16:30&nbsp;</td>
                <td>&nbsp;才藝表演</td>
            </tr>

            <tr>
                <td>&nbsp;16:30 - 17:00&nbsp;</td>
                <td>&nbsp;閉幕 & 大合照</td>
            </tr>

        </TABLE>

        <p>
            </br>
             ───────────────────────────────────────────── ୨୧ ─────────────────────────────────────────────</br>
        </p>

        <h3>表單填寫</h3>
        <form action="0307-3.php" method="GET">

            姓名:<input type="text" name="uName"><br>
            學號:<input type="text" name="uID"><br>
            聯絡電話：<input type="text" name="uPhone"><br>
            Email:<input type="text" name="uEmail"><br>
            
            年級:
            大一<input type="radio" name="uGrade" value="大一">
            大二<input type="radio" name="uGrade" value="大二">
            大三<input type="radio" name="uGrade" value="大三">
            大四<input type="radio" name="uGrade" value="大四">
            <br>

            興趣:
            睡覺<input type="checkbox" name="uInterest[]" value="睡覺">
            看書<input type="checkbox" name="uInterest[]" value="看書">
            打球<input type="checkbox" name="uInterest[]" value="打球">
            逛街<input type="checkbox" name="uInterest[]" value="逛街">
            <br>

            飲食偏好:
            葷<input type="radio" name="uFood" value="葷">
            素<input type="radio" name="uFood" value="素">
            <br>

            最期待的環節:
            <select name="uLike">
            <option value="學長姐分享">學長姐分享</option>
            <option value="破冰遊戲">破冰遊戲</option>
            <option value="校園尋寶">校園尋寶</option>
            <option value="才藝表演">才藝表演</option>
            </select>
            <br>

            備註:<br>
            <textarea cols="30" rows="10" name="uComment">
            </textarea>

            <br><input type="submit"><input type="reset">

        </form></center>

</body>
</html>