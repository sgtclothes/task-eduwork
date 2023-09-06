<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 12 jquery</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div id="testing">Testing
    <ul>
        <li>kopi</li>
        <li>teh</li>
        <li>jus</li>
    </ul>
    </div>
    <div id="testing-2">Testing 2</div>
    <div id="testing-3">Testing 3</div>
    <div id="testing-4">Testing 4</div>
    <div id="testing-5">Testing 5</div>
    <div id="testing-6">Testing 6</div>

    <div class="test-parent">
         <div class="test">
            <div class="kelas1">
                <div>1</div>
                <div>2</div>
                <div>3</div>
            </div>
            <div class="kelas2">
                <div id="kelas2-4">4</div>
                <div>5</div>
                <div>6</div>
            </div>
            <div class="kelas3">
                <div>7</div>
                <div>8</div>
                <div>9</div>
            </div>
        </div>
        <div class="test">
            <div class="kelas1">
                <div>11</div>
                <div>12</div>
                <div>13</div>
            </div>
            <div class="kelas2">
                <div>14</div>
                <div>15</div>
                <div>16</div>
            </div>
            <div class="kelas3">
                <div>17</div>
                <div>18</div>
                <div>19</div>
            </div>
         </div>
    </div>
   

    <button id="btn-testing">Klik Disini</button>
    <script>
        // console.log($)
        // console.log("test")

        let testing2 = document.getElementById("testing-2");
        console.log(testing2)
        testing2.style.color = "red";

        let testing = $("#testing li");
        let testing6 = $("#testing-6");
        testing.css('color', 'green')
        testing6.html("<h1>Testing ke enam</h1>");
        console.log($('#kelas2-4').parents(".test"))
        // testing6.hide();
        // testing.show();
        // console.log($("body").html())

        // $("body").delegate("#btn-testing", "click", () => {
        //     if (testing6.css("display") === "none") {
        //          testing6.show()
        //     } else if(testing6.css("display") === "block") {
        //         testing6.hide()
        //     }
        // })
        $("body").delegate("#btn-testing", "click", () => {
            $("body").append($(".test-parent").html())
        })

        $(".test .kelas1").css('color', 'red')
        $(".test .kelas2").css('color', 'blue')
        $(".test .kelas3").css('color', 'green').css('background-color', 'yellow')
        // console.log($(".test .kelas1").css('color', 'red').css('background-color', 'blue'))
        // testing.remove()
        // testing.style.color = "blue"
        // console.log(testing)

        // let a = "Hello adit" + " Hai";
        // a += ' World';
        // console.log(a);
    </script>

    <?php
    $test = "Hello World2";
    echo $test;
    
    ?>
</body>
</html>