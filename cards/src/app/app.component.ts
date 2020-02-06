import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'cards';
  posts = [
    {
      title: '1',
      username: '11',
      imageUrl: 'assets/tree.jpeg',
      content: '111 111'
    },
    {
      title: '1',
      username: '11',
      imageUrl: 'assets/biking.jpeg',
      content: '111 111'
    },
    {
      title: '1',
      username: '11',
      imageUrl: 'assets/mountain.jpeg',
      content: '111 111'
    }
  ]
  
}
