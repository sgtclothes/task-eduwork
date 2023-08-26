<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>

<body>
    <div id="testing">
        <div id="testing-1">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </div>
    </div>
    <div id="testing-2">Testing 2</div>
    <div id="testing-3">Testing 3</div>
    <div id="testing-4">Testing 4</div>
    <div id="testing-5">Testing 5</div>
    <div id="testing-6">Testing 6gfshdjkfhsdkjfhsdkj</div>

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
                <div>10</div>
                <div>11</div>
                <div>12</div>
            </div>
            <div class="kelas2">
                <div>13</div>
                <div>14</div>
                <div>15</div>
            </div>
            <div class="kelas3">
                <div>16</div>
                <div>17</div>
                <div>18</div>
            </div>
        </div>
    </div>


    <button id="btn-testing">Klik di sini</button>
    <script>
        let testing = $("#testing #testing-1 div");
        let testing6 = $("#testing-6");
        let testing2 = document.getElementById("testing-2");
        console.log($("#kelas2-4").parent());
        // testing.css('color', "green");
        // testing2.style.color = "red";
        $("body").delegate("#btn-testing", "click", () => {
          $("body").append($(".test-parent").html());
        });
        // testing6.html("<h1>Testing ke enam</h1>");
        // testing.show();
        // console.log();
    </script>
</body>

</html>