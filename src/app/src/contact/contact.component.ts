import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Router } from "@angular/router";

@Component({
  selector: 'contact-component',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent implements OnInit {

  formspreeURL = "https://formspree.io/f/mqkwboaj";
  myFormId = "my-form";
  firstNameId = "first_name";
  lastNameId = "last_name";
  telephoneId = "phone_number";
  replyToId = "_replyto";
  messageId = "message";
  // Anti-spam field
  gotchaId = "_gotcha";

  myForm: HTMLFormElement;

  constructor(private http: HttpClient, private router: Router) { }

  ngOnInit(): void {
    this.myForm = <HTMLFormElement>document.getElementById(this.myFormId);
  }

  onSubmit(): void {

    const fullName = this.getFormField(this.firstNameId).value + " " + this.getFormField(this.lastNameId).value;
    const subject = "Portfolio contact - " + fullName;
    const telephone = this.getFormField(this.telephoneId).value;
    const replyTo = this.getFormField(this.replyToId).value;
    const message = this.getFormField(this.messageId).value;
    const gotcha = this.getFormField(this.gotchaId).value;

    if (gotcha.length <= 0 && this.myForm.reportValidity()) {
      this.http.post(this.formspreeURL,
          {
            name: fullName,
            subject: subject,
            telephone: telephone,
            replyto: replyTo,
            message: message
          }).subscribe(
          response => {

          }
      );
    }
  }

  getFormField(name: string): HTMLInputElement {
    return <HTMLInputElement>document.getElementsByName(name)[0];
  }

  thankYou(): void {
    this.myForm.reset();
    this.router.navigate(['/thank-you']);
  }


}
