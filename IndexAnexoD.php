<html>
    <head >
        <title>Anexo D</title>
        <script>
            function 
        </script>
        <style>
            .ajuste {
                width: 1000px;
                height: 1500px;
            }
               
            .myButton {
                background-color: #44c767;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
                border-radius: 10px;
                border: 1px solid #18ab29;
                display: inline-block;
                cursor: pointer;
                color: #ffffff;
                font-family: Arial;
                font-size: 15px;
                padding: 6px 10px;
                text-decoration: none;
                text-shadow: 0px 1px 0px #2f6627;
            }

            .myButton:hover {
                background-color: #5cbf2a;
            }

            .myButton:active {
                position: relative;
                top: 1px;
            }
        </style>
    </head>
    <body>
        <form>
            <table align="center">
                <tr align="center">
                    <td>
                        <div>
                           <img src="AnexoDP1.jpg" class="ajuste"/>
                        </div>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <input type="button" onclick="window.location.href='index.html'" value="1" disabled class="myButton" />  
                        <input type="button" onclick="window.location.href='p2.html'" value="2" class="myButton" />  
                        <input type="button" onclick="window.location.href='p3.html'" value="3" class="myButton" />    
                        <input type="button" onclick="window.location.href='p4.html'" value="4" class="myButton" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
<?php
echo "<div>20</div>";
/*    require('fpdf.php');
    class PDF extends FPDF{
        function x(){
          $this->SetFont('Arial','B',16);
$this->Cell(40,10,'Hello World!');  
        }

    }
$pdf = new FPDF();
$pdf->AddPage();
$pdf->x();
$pdf->Output();*/

//Set the Content Type
  
?>
</html>