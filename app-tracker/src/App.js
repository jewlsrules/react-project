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
  //constructor
  constructor(props){
    super(props)
    this.state = {
      viewPage: 'home',
      formInputs: {
        companyName: null,
        jobTitle: null,
        jobLink: null,
        appStatus: null
      }
    }
  }

//need this to manage formInput and page views
  handleView = (view, data) => {
    console.log('handling')
    let formInputs = {
      name: '',
      image: '',
      body: '',
      id: null
  } //  closing for handleView

// ==============
// RENDER
// ==============
  render () {
    return (
      <div className='container'>
        <h1>Job Application Tracker</h1>
        <nav>
          <h3>Applications</h3>
          <h3>Add New Application</h3>
        </nav>
      </div>
    )
  }
} //  closing for App component

// =============================
// EXPORT
// =============================
export default App;
