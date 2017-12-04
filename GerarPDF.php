<?php
require('fpdf.php');

class PDF extends FPDF
{
    //Cabeçalho
function Header() {
    // Logo
    $this->Image('logoFim.png',10,6,30);
    $this->SetFont('Times','B',14);
    $this->Cell(60);
    // Titulo
    $this->Cell(0,10,utf8_decode('FICHA DE APTIDÃO PARA O TRABALHO¹'),0,0,'A');
    $this->Ln(7);
    $this->SetFont('Times','',8);
    $this->Cell(85);
    // Sub-Título
    $this->Cell(0,10,utf8_decode('(Portaria n.º 71/2015, de 10 de Março)'),0,0,'A');
    $this->Ln(10);
}

// Rodapé
function Footer(){ 
    $this->SetY(-15); // Posiciona a 1.5cm do fundo da página
    $this->SetFont('Times','I',5);
    $this->Cell(0,10, utf8_decode('¹Cópia da presente Ficha de Aptidão para o Trabalho, deve ser enviada ou dada em mão ao respetivo trabalhador e remetida ao Responsável do Serviço de Saúde e Segurança do Trabalho assim como ao Responsável pelos Recursos Humanos da empresa/entidade empregadora.'),0,0,'C');
}

// Tabela 1
function generateTable1(){
    $this->SetFont('Times','B',12);
    $this->Cell(0,10,'ENTIDADE EMPREGADORA/EMPRESA');
    $this->Ln(8);
        for($i=1;$i<=1;$i++){
            $this->SetFont('Times','',9);
            $this->cell(135,5, utf8_decode(" Designação Social / Nome: "),1,0,"L");
            $this->cell(55,5," NIPC/NIF: ",1,1,"L"); 
        }

        for($i=1;$i<=1;$i++){
            $this->SetFont('Times','',9);
            $this->cell(135,5," Estabelcimento: ",1,0,"L");
            $this->cell(55,5," CAE principal: ",1,1,"L"); 
        }

        $this->SetFont('Times','',9);
        $this->cell(190,5,utf8_decode(" Endereço: "),1,0,"L");
        $this->Ln();

        for($i=1;$i<=1;$i++){
            $this->SetFont('Times','',9);
            $this->cell(80,5,utf8_decode(" Código-Postal: "),1,0,"L");
            $this->cell(110,5," Localidade: ",1,1,"L"); 
        }

        for($i=1;$i<=1;$i++){
            $this->SetFont('Times','',9);
            $this->cell(80,5," Telefone: ",1,0,"L");
            $this->cell(110,5," E-mail: ",1,1,"L"); 
        }
}

// Tabela 2
function generateTable2(){
    $this->SetFont('Times','B',12);
    $this->Cell(0,10,utf8_decode('SERVIÇO DE SAÚDE DO TRABALHO'));
    $this->Ln(8);

        $this->SetFont('Times','',9);
        $this->Multicell(190,5,utf8_decode(" Designação da empresa de serviço externo de saúde do trabalho (se aplicavél): \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t NIPC/NIF: 503 811 416\n \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t MEDOCUF-Medicina Ocupacional do Fundão, Lda"),1,'L');
    
        for($i=1;$i<=1;$i++){
            $this->SetFont('Times','',6.5);
            $this->cell(45,10,utf8_decode(" Processo de autorização (PA) da DGS n.º396 "),1,0,'L'); 
            $this->SetFont('Times','',9);
            $this->Multicell(145,5,utf8_decode(" Modalidade de Organização do\n Serviço de Saúde do Trabalho: "),1,'L');
            
        }

}

//Tabela 3
function generateTable3(){
    $this->SetFont('Times','B',12);
    $this->Cell(0,10,'TRABALHADOR');
    $this->Ln(8);

        $this->SetFont('Times','',9);
        $this->cell(190,5,utf8_decode(" Nome: "),1,0,"L");
        $this->Ln();

        for($i=1;$i<=1;$i++){
            $this->SetFont('Times','',9);
            $this->cell(60,5," Sexo: ",1,0,"L");
            $this->cell(65,5," Data de Nascimento: ",1,0,"L");
            $this->cell(65,5," Nacionalidade: ",1,1,"L"); 
        }

        for($i=1;$i<=1;$i++){
            $this->SetFont('Times','',9);
            $this->cell(80,5,utf8_decode(" Data de admissão na empresa: "),1,0,"L");
            $this->cell(110,5," Categoria profissional: ",1,1,"L"); 
        }
        
        $this->SetFont('Times','',9);
        $this->cell(190,5,utf8_decode(" Posto de trabalho (principal): "),1,0,"L");
        $this->Ln();

        for($i=1;$i<=1;$i++){
            $this->SetFont('Times','',9);
            $this->cell(130,10,utf8_decode(" Actividade / Função (proposta ou actual): "),1,0,'L');
            $this->Multicell(60,5,utf8_decode(" Data de admissão na Atividade / Função: \n \t\t\t"),1,'L'); 
        }

}

//Tabela 4
function generateTable4(){
    $this->SetFont('Times','B',12);
    $this->Cell(0,10,'POSTO DE TRABALHO');
    $this->Ln(8);

    for($i=1;$i<=1;$i++){
            $this->SetFont('Times','',6.5);
            $this->cell(45,5,utf8_decode(" Análise do posto de trabalho "),1,0,"L");
            $this->cell(19,5,utf8_decode(" Sim:       Não: "),1,0,"L");
            $this->cell(126,5," Justificar em caso negativo: ",1,1,"L"); 
    }
    for($i=1;$i<=1;$i++){
            $this->SetFont('Times','',6.5);
            $this->cell(45,5,utf8_decode(" Identificação de fatores de risco profissional"),1,'T');
            $this->cell(19,5,utf8_decode(" Sim:       Não:"),1,0,"L");
            $this->cell(126,5," Especificar os principais fatores de risco profissional: ",1,1,"T"); 
    }
    for($i=1;$i<=1;$i++){
            $this->SetFont('Times','',6.5);
            $this->cell(45,5,utf8_decode(" Avaliação da exposição profissional"),1,'T');
            $this->cell(19,5,utf8_decode(" Sim:       Não:"),1,0,"L");
            $this->cell(126,5,utf8_decode(" Especificar a avaliação efectuada: "),1,1,"T"); 
    }

}

//Tabela 5
function generateTable5(){
    $this->SetFont('Times','B',12);
    $this->Cell(0,10,utf8_decode('EXAME DE SAÚDE E RESULTADO DE APTIDÃO'));
    $this->Ln(8);

    for($i=1;$i<=1;$i++){
        $this->SetFont('Times','B',7);
        $this->cell(95,5,utf8_decode(" EXAME DE SAÚDE "),1,0,"C");
        $this->cell(95,5,utf8_decode(" RESULTADO DE APTIDÃO PARA A FUNÇÃO PROPOSTA OU ATUAL "),1,1,"C"); 
    }
    for($i=1;$i<=1;$i++){
        $this->SetFont('Times','',6);
        $this->cell(95,5,utf8_decode(" Data do exame: "),1,0,"L");
    }

    for($i=1;$i<=1;$i++){
            $this->SetXY (105,162);
            $this->SetFont('Times','',6);
            $this->Multicell(95,4.5,utf8_decode(" Apto \n Apto condicionalmente \n\n Inapto temporariamente \n Inapto definitivamente \n Outras funções que pode desempenhar: \n \t\t 1. _________________________________________________________________________________ \n \t\t 2. _________________________________________________________________________________ \n \t\t 3. _________________________________________________________________________________ \n \t\t 4. _________________________________________________________________________________"),1,'T'); 
        } 

    for($i=1;$i<=1;$i++){
         $this->SetXY (10,167);
            $this->SetFont('Times','',6);
            $this->Multicell(10,40,utf8_decode(" Tipo: "),1,'C'); 
        $this->Ln(5);
        for($i=1;$i<=1;$i++){
            $this->SetXY (20,167);
            $this->SetFont('Times','',6);
            $this->Multicell(85,4,utf8_decode(" Admissão \n Periódico \n Ocasional \n \t\t\t - Após doença  \n \t\t\t - Após acidente  \n \t\t\t - A pedido do trabalhador  \n \t\t\t - A pedido do serviço  \n \t\t\t - Por mudança da função  \n \t\t\t - Por alterações das condições de trabalho \n Outro (especifique): ____________________________________________________________"),1,'T'); 
        } 
    }
}

//Tabela 6
function generateTable6(){
    $this->SetFont('Times','B',12);
    $this->Cell(0,10,utf8_decode('RECOMENDAÇÕES'));
    $this->Ln(8);
        for($i=1;$i<=1;$i++){
            $this->SetFont('Times','',6.5);
            $this->cell(40,5, utf8_decode(" Sem recomendações "),1,0,"L");
            $this->cell(150,5,utf8_decode(" Com recomendações, designadamente as abaixo indicadas com 'X' "),1,1,"L"); 
        }
        $this->Ln(0);
        for($i=1;$i<=1;$i++){
            $this->SetXY(10,220);
            $this->SetFont('Times','',6.5);
            $this->Multicell(40,4, utf8_decode(" Avaliação de fatores de risco no \n posto de trabalho "),1,"L");
        }
        for($i=1;$i<=1;$i++){
            $this->SetXY(10,228);
            $this->SetFont('Times','',6.5);
            $this->Multicell(40,4, utf8_decode(" Correção de condições de trabalho "),1,"L");
        }
        for($i=1;$i<=1;$i++){
            $this->SetXY(10,232);
            $this->SetFont('Times','',6.5);
            $this->Multicell(40,4, utf8_decode(" Uso de equipamento de proteção \n individual "),1,"L");
        }
        for($i=1;$i<=1;$i++){
            $this->SetXY(10,240);
            $this->SetFont('Times','',6.5);
            $this->Multicell(40,4, utf8_decode(" Proposta de organização de trabalho "),1,"L");
        }
        for($i=1;$i<=1;$i++){
            $this->SetXY(10,244);
            $this->SetFont('Times','',6.5);
            $this->Multicell(40,4, utf8_decode(" Formação e/ou informação do \n trabalhador "),1,"L");
        }
        for($i=1;$i<=1;$i++){
            $this->SetXY(10,252);
            $this->SetFont('Times','',6.5);
            $this->Multicell(40,4, utf8_decode(" Outras "),1,"L");
        }
        
        for($i=1;$i<=1;$i++){
            $this->SetXY(50,220);
            $this->Multicell(150,8, utf8_decode("  "),1,"T");
        }
        for($i=1;$i<=1;$i++){
            $this->SetXY(50,228);
            $this->SetFont('Times','I',5.5);
            $this->Multicell(150,4, utf8_decode(" Discriminar o mais relevante: "),1,"T");
        }
        for($i=1;$i<=1;$i++){
            $this->SetXY(50,232);
            $this->Multicell(150,8, utf8_decode("  "),1,"T");
        }
        for($i=1;$i<=1;$i++){
            $this->SetXY(50,240);
            $this->SetFont('Times','I',5.5);
            $this->Multicell(150,4, utf8_decode(" Discriminar o mais relevante: "),1,"T");
        }
        for($i=1;$i<=1;$i++){
            $this->SetXY(50,244);
            $this->Multicell(150,8, utf8_decode("  "),1,"T");
        }
        for($i=1;$i<=1;$i++){
            $this->SetXY(50,252);
            $this->SetFont('Times','I',5.5);
            $this->Multicell(150,4, utf8_decode(" Discriminar o mais relevante: "),1,"T");
        }
    
        
}

function generateTable7(){
    $this->Ln(8);
        for($i=1;$i<=1;$i++){
            $this->SetXY (10,259);
            $this->SetFont('Times','',6);
            $this->Multicell(130,8.9,utf8_decode(" "),1,'T'); 
        }
        for($i=1;$i<=1;$i++){
            $this->SetXY (10,268);
            $this->SetFont('Times','',6);
            $this->Multicell(85,8.9,utf8_decode(" "),1,'T'); 
        }
        for($i=1;$i<=1;$i++){
            $this->SetXY (140,259);
            $this->SetFont('Times','',6);
            $this->Multicell(60,8.9,utf8_decode(" "),1,'T'); 
        }
        for($i=1;$i<=1;$i++){
            $this->SetXY (95,268);
            $this->SetFont('Times','',6);
            $this->Multicell(105,8.9,utf8_decode(" "),1,'T'); 
        }
        
}

function Box(){
    $this->Image('CaixaVazia.png',95,167,4,4);  //Exame de Saúde
    $this->Image('CaixaVazia.png',95,171,4,4);  //Exame de Saúde
    $this->Image('CaixaVazia.png',95,179,4,4);  //Exame de Saúde
    $this->Image('CaixaVazia.png',95,183,4,4);  //Exame de Saúde
    $this->Image('CaixaVazia.png',95,187,4,4);  //Exame de Saúde
    $this->Image('CaixaVazia.png',95,191,4,4);  //Exame de Saúde
    $this->Image('CaixaVazia.png',95,195,4,4);  //Exame de Saúde
    $this->Image('CaixaVazia.png',95,199,4,4);  //Exame de Saúde

    $this->Image('CaixaVazia.png',160,162,4,4); //Resutaldo de aptidão
    $this->Image('CaixaVazia.png',160,166,4,4); //Resutaldo de aptidão
    $this->Image('CaixaVazia.png',160,176,4,4); //Resutaldo de aptidão
    $this->Image('CaixaVazia.png',160,180,4,4); //Resutaldo de aptidão

    $this->Image('CaixaVazia.png',61,134.5,4,4);    //Posto de Trabalho Sim/Não
    $this->Image('CaixaVazia.png',69.5,134.5,4,4);  //Posto de Trabalho Sim/Não
    $this->Image('CaixaVazia.png',61,139.5,4,4);    //Posto de Trabalho Sim/Não
    $this->Image('CaixaVazia.png',69.5,139.5,4,4);  //Posto de Trabalho Sim/Não
    $this->Image('CaixaVazia.png',61,144.5,4,4);    //Posto de Trabalho Sim/Não
    $this->Image('CaixaVazia.png',69.5,144.5,4,4);  //Posto de Trabalho Sim/Não

    $this->Image('CaixaVazia.png', 111,81,4,4); //Serviço de saúde do trabalho
    $this->Image('CaixaPreenchida.png', 128,81,4,4); //Serviço de saúde do trabalho caixa preenchida
    $this->Image('CaixaVazia.png', 145,81,4,4); //Serviço de saúde do trabalho
    $this->Image('CaixaVazia.png', 160,81,4,4); //Serviço de saúde do trabalho

    $this->Image('CaixaVazia.png',35,215.5,4,4);  //Recomendações
    $this->Image('CaixaVazia.png',130,215.5,4,4);  //Recomendações
    $this->Image('CaixaVazia.png',46,222,4,4);  //Recomendações
    $this->Image('CaixaVazia.png',46,228,4,4);  //Recomendações
    $this->Image('CaixaVazia.png',46,234,4,4);  //Recomendações
    $this->Image('CaixaVazia.png',46,240,4,4);  //Recomendações
    $this->Image('CaixaVazia.png',46,246,4,4);  //Recomendações
    $this->Image('CaixaVazia.png',46,252,4,4);  //Recomendações
    


    
}

function InsertIntoMulticellServicoSaudeTrabalho(){
    $this->SetXY (96,73);
    $this->SetFont('Times','I',8);
    $this->Multicell(20,20,utf8_decode(" Interno "),0,'C'); 

    $this->SetXY(112,73);
    $this->SetFont('Times','I',8);
    $this->Multicell(20,20,utf8_decode(" Externo "),0,'C');

    $this->SetXY(129,73);
    $this->SetFont('Times','I',8);
    $this->Multicell(20,20,utf8_decode(" Comum "),0,'C');

    $this->SetXY(145,73);
    $this->SetFont('Times','I',8);
    $this->Multicell(20,20,utf8_decode(" Outro "),0,'C');
    
}

function InsertIntoMulticellRecomendacoes(){
            $this->SetXY(50,218);
            $this->SetFont('Times','I',5.5);
            $this->Multicell(40,8, utf8_decode(" Discriminar o mais relevante: "),0,"T");

            $this->SetXY(50,230);
            $this->SetFont('Times','I',5.5);
            $this->Multicell(40,8, utf8_decode(" Discriminar o mais relevante: "),0,"T");

            $this->SetXY(50,242);
            $this->SetFont('Times','I',5.5);
            $this->Multicell(40,8, utf8_decode(" Discriminar o mais relevante: "),0,"T");


    
}


function InsertIntoTable6(){
    $this->SetXY(52,209);
    $this->SetFont('Times','I',5);
    $this->Multicell(0,3,utf8_decode('[Da responsabilidade do médico do trabalho e dirigida ao Empregador ou Gestor de Topo responsável pela área da Saúde e Segurança do Trabalho ou Responsável dos Recursos Humanos da empresa/entidade empregadora]'));


}

function InsertIntoTable7(){
            $this->SetXY(10,257);
            $this->SetFont('Times','B',7);
            $this->Multicell(40,8, utf8_decode(" Médico do Trabalho "),0,"T");

            $this->SetXY(10,262);
            $this->SetFont('Times','',7);
            $this->Multicell(40,8, utf8_decode(" Data: "),0,"T");

            $this->SetXY(60,257);
            $this->SetFont('Times','',7);
            $this->Multicell(40,8, utf8_decode(" Nº Cédula Profissional: 18229 "),0,"T");

            $this->SetXY(60,261);
            $this->SetFont('Times','I',5.5);
            $this->Multicell(40,8, utf8_decode(" Assinatura: "),0,"T");

            $this->SetXY(10,266);
            $this->SetFont('Times','B',7);
            $this->Multicell(40,8, utf8_decode(" Trabalhador "),0,"T");

            $this->SetXY(25,266);
            $this->SetFont('Times','I',5.5);
            $this->Multicell(40,8, utf8_decode(" [Tomei conhecimento]"),0,"T");

            $this->SetXY(60,266);
            $this->SetFont('Times','I',5.5);
            $this->Multicell(40,8, utf8_decode(" Assinatura: "),0,"T");
            
            $this->SetXY(10,268.9);
            $this->SetFont('Times','',7);
            $this->Multicell(40,8, utf8_decode(" Data: "),0,"T");

            $this->SetXY(95,266);
            $this->SetFont('Times','B',7);
            $this->Multicell(60,8, utf8_decode(" Responsável Serviço de SST/Recursos Humanos "),0,"T");

            $this->SetXY(95,268.9);
            $this->SetFont('Times','',7);
            $this->Multicell(40,8, utf8_decode(" Data: "),0,"T");

            $this->SetXY(175,266);
            $this->SetFont('Times','',5.5);
            $this->Multicell(40,8, utf8_decode(" Assinatura: "),0,"T");

            $this->Image('Assinatura.png',68,262,70,5.5);  //Assinatura

            $this->SetXY(162,256.5);
            $this->SetFont('Times','',5.5);
            $this->Multicell(40,8, utf8_decode(" Dr J. Pignatelli Soares "),0,"T");

            $this->SetXY(167,263);
            $this->SetFont('Times','',5.5);
            $this->Multicell(40,8, utf8_decode(" *M18229* "),0,"T");
            $this->Image('Vinheta.png',156,262,30,4);  //Vinheta
}


}


// Instanciar funções
$pdf = new PDF();
$pdf->AddPage();
$pdf->generateTable1(); //Tabela 1
$pdf->generateTable2(); //Tabela 2
$pdf->generateTable3(); //Tabela 3
$pdf->generateTable4(); //Tabela 4
$pdf->generateTable5(); //Tabela 5
$pdf->generateTable6(); //Tabela 6
$pdf->generateTable7(); //Tabela 7
$pdf->Box();
$pdf->InsertIntoMulticellServicoSaudeTrabalho();
$pdf->InsertIntoMulticellRecomendacoes();
$pdf->InsertIntoTable6();
$pdf->InsertIntoTable7();

$pdf->SetFont('Times','B',9);

$idColaborador = $_GET["idColaborador"];
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'newusers');
        $sql = "SELECT C.Nome, C.NIF, C.CAE, C.Estabelecimento, C.Endereco, C.CodPostal, C.Tlf, ";
        $sql .="C.Localidade, C.Email FROM clientes C ";
        $sql .="left join colaboradores CO on C.ID_cliente = CO.ID_cliente ";
        $sql .="WHERE CO.ID_colaborador=".$idColaborador."";
        $result = mysqli_query($con,$sql);

        $sql2 ="SELECT * FROM colaboradores WHERE ID_colaborador=".$idColaborador."";
        $result2 = mysqli_query($con,$sql2);


        while($rows=mysqli_fetch_array($result)){
            $Nome = $rows['Nome'];
            $NIF = $rows['NIF'];
            $CAE = $rows['CAE'];
            $Estabelecimento = $rows['Estabelecimento'];
            $Endereco = $rows['Endereco'];
            $CodPostal = $rows['CodPostal'];
            $Telefone = $rows['Tlf'];
            $Localidade = $rows['Localidade'];
            $Email = $rows['Email'];
            

            $pdf->SetXY (46,35.5);
            $pdf->Multicell(60,4,utf8_decode($Nome),0,'T');

            $pdf->SetXY (160,35.5);
            $pdf->Multicell(30,4,utf8_decode($NIF),0,'T');

            $pdf->SetXY (32,40.5);
            $pdf->Multicell(70,4,utf8_decode($Estabelecimento),0,'T');

            $pdf->SetXY (165,40.5);
            $pdf->Multicell(30,4,utf8_decode($CAE),0,'T');

            $pdf->SetXY (24,45.5);
            $pdf->Multicell(100,4,utf8_decode($Endereco),0,'T');

            $pdf->SetXY (30,50.5);
            $pdf->Multicell(30,4,utf8_decode($CodPostal),0,'T');

            $pdf->SetXY (107,50.5);
            $pdf->Multicell(100,4,utf8_decode($Localidade),0,'T');

            $pdf->SetXY (24,55.5);
            $pdf->Multicell(30,4,utf8_decode($Telefone),0,'T');

            $pdf->SetXY (101,55.5);
            $pdf->Multicell(100,4,utf8_decode($Email),0,'T');

        }

        while($rows=mysqli_fetch_array($result2)){
            $Nome = $rows[2];
            $Sexo = $rows[3];
            $DataNasc = $rows[4];
            $Nacionalidade = $rows[5];
            $DAE = $rows[6];
            $CatProf = $rows[7];
            $Funcao = $rows[8];
            $Funcao2 = $rows[8];
            $DAAF = $rows[10];
            $DataConsulta = $rows[12];
            $DataConsulta2 = $rows[12];
            $DataConsulta3 = $rows[12];

            
            $pdf->SetXY (20,96.5);
            $pdf->Multicell(60,4,utf8_decode($Nome),0,'T');

            $pdf->SetXY (19,101.5);
            $pdf->Multicell(60,4,utf8_decode($Sexo),0,'T');

            $pdf->SetXY (98,101.5);
            $pdf->Multicell(60,4,utf8_decode($DataNasc),0,'T');

            $pdf->SetXY (156,101.5);
            $pdf->Multicell(60,4,utf8_decode($Nacionalidade),0,'T');

            $pdf->SetXY (50,106.5);
            $pdf->Multicell(60,4,utf8_decode($DAE),0,'T');

            $pdf->SetXY (120,106.5);
            $pdf->Multicell(80,4,utf8_decode($CatProf),0,'T');

            
            $pdf->SetXY (64,119);
            $pdf->Multicell(60,4,utf8_decode($Funcao2),0,'T');

            $pdf->SetXY (160,121);
            $pdf->Multicell(60,4,utf8_decode($DAAF),0,'T');

            $pdf->SetXY (25,162.5);
            $pdf->Multicell(60,4,utf8_decode($DataConsulta),0,'T');

            $pdf->SetXY (18,264);
            $pdf->SetFont('Times','',7);
            $pdf->Multicell(60,4,utf8_decode($DataConsulta2),0,'T');

            $pdf->SetXY (18,271);
            $pdf->SetFont('Times','',7);
            $pdf->Multicell(60,4,utf8_decode($DataConsulta3),0,'T');

        }

$pdf->Output();
?>