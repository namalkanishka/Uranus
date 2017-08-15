import React, { Component } from 'react';
import { Text, View, StyleSheet, Button, TextInput,TouchableOpacity,Icon } from 'react-native';
import { Constants } from 'expo';

export default class App extends Component {
  state = {
    inputValue1: "Email Address",
    inputValue: "Address",
    inputValue2: "City"
    
  };

  _handleTextChange = inputValue => {
    this.setState({ inputValue });
  };
  
  _handleTextChange1 = inputValue1 => {
    this.setState({ inputValue1 });
  };
  
  _handleTextChange2 = inputValue2 => {
    this.setState({ inputValue2 });
  };

  render() {
    return (
        <View style={styles.container}>
       
        <Text style={styles.yellow}>Email Address</Text>
        
        <TextInput
          value={this.state.inputValue1}
          onChangeText={this._handleTextChange1}
          style={{height: 44, padding: 8 }}
        />
      <Text style={styles.yellow}>Address</Text>
        <TextInput
          value={this.state.inputValue}
          onChangeText={this._handleTextChange}
          style={{height: 44, padding: 8, justifyContent: 'center' }}
        />
        
        <Text style={styles.yellow}>City</Text>
        <TextInput
          value={this.state.inputValue2}
          onChangeText={this._handleTextChange2}
          style={{height: 44, padding: 8, justifyContent: 'center' }}
        />
      
      
       
        <View style={styles.alternativeLayoutButtonContainer}>
          
          <Button
            onPress={this._onPressButton}
            title="Next"
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
 
  alternativeLayoutButtonContainer: {
    margin: 20,
    flexDirection: 'row',
    textAlign: 'center',
    justifyContent: 'center'
  },
  yellow:{
    margin: 10,
    color: '#f1c40f',
    fontWeight: 'bold',
    fontSize: 15
  },
  
  
});

