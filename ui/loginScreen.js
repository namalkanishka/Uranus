import React, { Component } from 'react';
import { Text, View, StyleSheet, Button, TextInput } from 'react-native';
import { Constants } from 'expo';

export default class App extends Component {
  state = {
    inputValue: "Name",
    inputValue1: "Password"
    
  };

  _handleTextChange = inputValue => {
    this.setState({ inputValue });
  };
  
  _handleTextChange = inputValue1 => {
    this.setState({ inputValue1 });
  };

  render() {
    return (
        <View style={styles.container}>
        
        <Text style={styles.yellow}>User name</Text>
        
        <TextInput
          value={this.state.inputValue1}
          onChangeText={this._handleTextChange}
          style={{height: 44, padding: 8 }}
        />
      <Text style={styles.yellow}>Password</Text>
        <TextInput
          value={this.state.inputValue}
          onChangeText={this._handleTextChange}
          style={{height: 44, padding: 8, justifyContent: 'center' }}
        />
      
       <Text style={styles.yellow_password_forget}>Forget your password</Text>
       
        <View style={styles.alternativeLayoutButtonContainer}>
          <Button
            onPress={this._onPressButton}
            title="Register"
            color="#bdc3c7"
          />
          <Button
            onPress={this._onPressButton}
            title="Login"
            color="#f1c40f"
          />
        </View>
      </View>
     
    );
  }
}


const styles = StyleSheet.create({
  container: {
   flex: 1,
   justifyContent: 'center',
  },
  buttonContainer: {
    margin: 20
  },
  alternativeLayoutButtonContainer: {
    margin: 20,
    flexDirection: 'row',
    justifyContent: 'space-between'
  },
  yellow:{
    margin: 10,
    color: '#f1c40f',
    fontWeight: 'bold',
    fontSize: 15
  },
  yellow_password_forget:{
    margin: 40,
    color: '#f1c40f',
    fontWeight: 'bold',
    fontSize: 15,
    textAlign: 'center'
  }
  
});

