
 <html>
<head>
<title>Biodata - Alhamdi</title>
<script type='text/javascript'>

function biodata()
{
    var JSON_alhamdi = {
                        nama:'Alhamdi Ferdiawan Bahri',
                        address:'Jalan Pahlawan IV/02 Pamolokan Sumenep , 69412',
						hobbie:['Basket','Sepak Bola','Ping Pong'],
                        status_nikah:false,
						scholl:'SMK NEGERI 1 SUMENEP',
                        skill:['Coding','Main Game','Ngetik']
                   };
                    
    var nikah;
     
    if(JSON_alhamdi.status_nikah == true){
        nikah = "Sudah Nikah";
    }else{
        nikah = "Belum Nikah";
    }
    
	var x = "Nama : " + JSON_alhamdi.nama +"<br> Alamat " + JSON_alhamdi.address + "<br>Hobbi : "+ JSON_alhamdi.hobbie[0]+ "<br> Status Nikah : "+nikah + "<br> Asal Sekolah : " + JSON_alhamdi.scholl + "<br> Skill : " + JSON_alhamdi.skill[0];
	return x;
}

	var x = biodata();
	document.write(x);

</script>
</head>
<body>
     
</body>
</html>