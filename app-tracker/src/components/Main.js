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
  }

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
        <Applications
          key={data.id}
          data={data}
          handleView={this.props.handleView}
          handleDelete={this.props.handleDelete}
        />

        <Form
          handleCreate={this.handleCreate}
          handleUpdate={this.handleUpdate}
          formInput={this.props.formInput}
          view={this.props.view}
        />
      </div>
    )
  }
} //closing for Main component

// =============================
// EXPORT
// =============================
export default Main