import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {FormControl, FormGroup} from "@angular/forms";

@Component({
  selector: 'contact-component',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent implements OnInit {

  /*
  contactForm: FormGroup;
  first_name: FormControl;
  last_name: FormControl;
  phone_number: FormControl;
  email: FormControl;
  message: FormControl;
  */

  constructor(private http: HttpClient) { }

  ngOnInit(): void {
  }

  onSubmit(): void {
    /*const email = this.contactForm.value;

    this.http.post('https://formspree.io/asdlf7asdf',
      {
        name: email.first_name + " " + email.last_name,
        telephone: email.phone_number,
        replyto: email.email,
        message: email.messages
      }).subscribe(
      response => {
        console.log(response);
      }
    );*/
  }

}
