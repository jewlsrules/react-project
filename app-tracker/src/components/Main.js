// =============================
// DEPENDENCIES
// =============================
// packages
import React from 'react'

//  components
import Form from './Form.js'
import Applications from './Applications.js'

// =============================
// COMPONENT CLASS
// =============================

class Main extends React.Component {
  constructor(props) {
    super(props)
    this.state = {
      applications: []
    }
  } // closing for constructor

// =============================
// HANDLERS/FUNCTIONS
// =============================
  handleCreate = () => {
    console.log('created')
  }

  handleUpdate = () => {
    console.log('updated')
  }

  handleDelete = () => {
    console.log('deleted')
  }

  // ==============
  // RENDER
  // ==============
  render () {
    return (
      <div className="main">
      <h3>{this.props.view.pageTitle}</h3>



      //uncomment after creating data in sql
      {/*
      {
        this.props.view.page === 'home'
        ? this.state.posts.map((data)=> (
            <Applications
              key={data.id}
              data={data}
              handleView={this.props.handleView}
              handleDelete={this.props.handleDelete}
            />
          ))
        : <Form
          handleCreate={this.handleCreate}
          handleUpdate={this.handleUpdate}
          formInputs={this.props.formInput}
          view={this.props.view}
        />
      }

      */}



      </div>
    )
  }
} //closing for Main component

// =============================
// EXPORT
// =============================
export default Main
