import { Component } from '@angular/core';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  
  includeLetters = false
  includeNumbers = false
  includeSymbols = false
  length = 0
  password = ''
  
  // constructor() {
  //   this.password = ''
  // }
  
  onChangeLength(value: string) {
    const parsedValue = parseInt(value)
    if(!isNaN(parsedValue)) {
      this.length = parsedValue
    }
  }
  
  onButtonClick(event) {
    console.log(event)
    console.log('Button was clicked')
    
    const numbers = '1234567890'
    const letters = 'abcdefghijklmnopqrstuvwxyz'
    const symbols = '!@#$%^&*()'
    
    let validChars = ''
    if(this.includeLetters) {
      validChars += letters
    }
    if(this.includeNumbers) {
      validChars += numbers
    }
    if(this.includeSymbols) {
      validChars += symbols
    }
    
    let generatedPassword = ''
    for(let i = 0; i < this.length; i++) {
      const index = Math.floor(Math.random() * validChars.length)
      generatedPassword += validChars[index]
    }
    this.password = generatedPassword
    
  }
  
  onChangeUseLetters(event) {
    this.includeLetters = !this.includeLetters
  }
  onChangeUseSymbols(event) {
    this.includeSymbols = !this.includeSymbols
  }
  onChangeUseNumbers(event) {
    this.includeNumbers = !this.includeNumbers
  }
  
}
