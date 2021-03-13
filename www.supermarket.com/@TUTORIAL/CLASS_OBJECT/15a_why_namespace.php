<?php 

class GenerateFile
{
	public function getExcel()
	{
		echo "Download Excel File";
	}
}

class GenerateFile
{
	public function getPDF()
	{
		echo "Download PDF File";
	}
}

$excelObject = new GenerateFile;
$pdfObject = new GenerateFile;

$excelObject->getExcel;
$pdfObject->getPDF;

?>