find uploads/ -name "*.pdf" | while read file;
do
curl --data-binary @"$file" -H "Content-Type: application/pdf" -L "http://pdfx.cs.man.ac.uk" > "${file}x.xml";
done
zip -r output.zip uploads
chmod 777 output.zip
