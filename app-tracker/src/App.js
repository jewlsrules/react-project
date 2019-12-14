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
      view: {
        page: 'home',
        pageTitle: 'View Your Applications'
      },
      formInputs: {
        companyName: null,
        jobTitle: null,
        jobLink: null,
        appStatus: null
      }
    }
  } // closing for constructor

//need this to manage formInput and page views
  handleView = (view, data) => {
    console.log('handling')
    let formInputs = {
      name: '',
      image: '',
      body: '',
      id: null
    }
    // show the page title depending on the page:
    switch(view) {
      case 'home':
        pageTitle = 'View Your Applications'
        break
      case 'addApplication':
        pageTitle = 'Track a New Application'
        break
      case 'editApplication':
        pageTitle = 'Update Application'
        formInputs = {
          companyName: postData.companyName,
          jobTitle: postData.companyTitle,
          jobLink: postData.jobLink,
          appStatus: postData.appStatus
        }
        break
      default:
        break
    }
    this.setState({
      viewPage: view,
      formInputs: formInputs
    })
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
          <Main
            view={this.state.view}
            handleView={this.handleView}
            formInputs={this.state.formInputs}
          />
        </nav>
      </div>
    )
  }
} //  closing for App component

// =============================
// EXPORT
// =============================
export default App;
