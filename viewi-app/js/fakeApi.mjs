import express from 'express';
import bodyParser from 'body-parser'

const app = express();
app.use(bodyParser.urlencoded({ extended: false }))
app.use(bodyParser.json())

app.get('/', (req, res) => {
  res.json({
    message: 'fake api server running',
  });
});

app.get('/api/movies', (req, res) => {
  res.json([
    { id: 1, name: 'Inception', year: 2010 },
    { id: 2, name: 'Interstellar', year: 2014 },
    { id: 3, name: 'Dunkirk', year: 2017 },
  ]);
});

app.post('/api/movies', (req, res) => {

  console.log(req.body);

  res.json([
    { id: 1, name: 'Inception', year: 2010 },
    { id: 2, name: 'Interstellar', year: 2014 },
    { id: 3, name: 'Dunkirk', year: 2017 },
  ]);
});

app.listen(5000, () => {
  console.log('fake server running on port 5000');
});
