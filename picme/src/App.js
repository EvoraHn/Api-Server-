import React from 'react';
import TopBar from './cmps/TopBar';
import './css/App.scss';

class App extends React.Component{
  render(){
    return (
      <div className="App">
          <TopBar /> 

          <div className="LogoContainer">
            <div className="Logo"></div>
          </div>
          
          <div className="LoginFormContainer">
            <div className="LoginForm">
              <div className="FieldContainer">
                <input type="text" id="UsrUsr" placeholder="Usuario" ></input>
              </div>
              <div className="FieldContainer">
                <input type="password" id="UsrPwd" placeholder="Contraseña" ></input>
              </div>
              <div className="FieldContainer">
                <div className="Button" >Ingresar</div>
              </div>
            </div>
          </div>

      </div>
    );
  }
}
  export default App;