const express = require('express');
const mysql = require('mysql');
const natural = require('natural');
const cors = require('cors');
const app = express();
const port = 3000;

app.use(cors());

const tokenisasi = new natural.WordTokenizer();

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database:'kbbi'
});

db.connect((err) =>{
    if(err){
        console.log("Error connecting to database");
        return res.status(500).send('Gagal mengirim ke Database');
    }
    console.log('Tersambung ke database');
});

app.get('/tokenisasi', (req, res) => {
    const sentok = req.query.sentence;
    const tokenizer = tokenisasi.tokenize(sentok);
    // console.log(sentok);
    const hasil = tokenizer.map((data) => {
        return new Promise((accept, reject) => {
            db.query(`SELECT * FROM kbbi WHERE kata LIKE '${data}'`, (error, result) => {
                if(error) return reject(error);
                if(result.length > 0)
                {
                    data = {kata: data, arti: result[0].arti};
                }else{
                    data = {kata: data, arti: 'Tidak ditemukan'};
                }
                accept(data);    
            });
        });      
    });

    Promise.all(hasil)
    .then((result) =>{
        res.json(result);
    }).catch((error) => {
        console.error(error);
    });
});

app.listen(port, function(){
    console.log(`Server menyala pada http//localhost:${port}`);  
});