<script language="javascript" type="text/javascript">
            function displayForm(){
                var d=document;
                var test_div = document.getElementById('textbox');
                document.getElementById('textbox').innerHTML="เพิ่มเนื้อหาคำร้อง :";
                var f = test_div.appendChild(d.createElement('form'));
                var i=d.createElement('input');
                var i2=i.cloneNode(false);
                var br=d.createElement('br');
                f.action='_managecreatedocument.php';
                f.method='POST';
                f.name='f';
                i.type='text';
                i.name='myText';
                i.value='';
                i2.type='submit';
                // i2.value=' บันทึกข้อมูล ';
                f.appendChild(i);
                f.appendChild(br); 
                f.appendChild(i2);
                document.getElementsByName("usetextbox")[0].disabled = true;
            }

            
</script>