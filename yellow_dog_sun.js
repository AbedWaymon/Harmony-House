// Include libraries to be used
const fs = require('fs');
const express = require('express');
const bodyParser = require('body-parser');

// Create application instance
const app = express();

// Set up body-parser middleware to handle JSON data
app.use(bodyParser.json());

// Set up music library
let musicLibrary = {
  genres: [
    'Classical',
    'Jazz',
    'Blues',
    'Rock',
    'R&B',
    'Reggae',
    'World Music'
  ],
  instruments: [
    'Guitar',
    'Piano',
    'Saxophone',
    'Trumpet',
    'Drums',
    'Violin',
    'Flute'
  ]
}

// Set up router
const router = express.Router();
router.get('/', (req, res) => {
  res.send('Welcome to the Music Therapy Service!');
});

// Set up routes for music library
router.get('/music', (req, res) => {
  res.send(musicLibrary);
});

// Set up route for finding music therapy services
router.get('/search', (req, res) => {
  const { genre, instrument } = req.query;
  if (genre && instrument) {
    let musicTherapist = `You should consider finding a music therapist who is skilled in both ${genre} and ${instrument} music.`;
    res.send(musicTherapist);
  } else if (genre) {
    let musicTherapist = `You should consider finding a music therapist who is skilled in ${genre} music.`;
    res.send(musicTherapist);
  } else if (instrument) {
    let musicTherapist = `You should consider finding a music therapist who is skilled in ${instrument} music.`;
    res.send(musicTherapist);
  } else {
    res.send('Please provide a genre or instrument to search for a music therapist.');
  }
});

// Use router
app.use('/api', router);

// Set up server
const port = process.env.PORT || 3000;
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});