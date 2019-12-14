// =============================
// DEPENDENCIES
// =============================
// packages
import React from 'react';
import './App.css';

// components
import Main from './components/Main.js'

// =============================
// COMPONENT CLASS
// =============================

class App extends React.Component {

//need this to manage formInput and page views
  handleView = (view, data) => {
    console.log('handling')

  } //  closing for handleView

// ==============
// RENDER
// ==============
  render () {
    return (
      <div className='container'>
        <h1>Ashley & Jewls' App</h1>
      </div>
    )
  }
} //  closing for App component

// =============================
// EXPORT
// =============================
export default App;
