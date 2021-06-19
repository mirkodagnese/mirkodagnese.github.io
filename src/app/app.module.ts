import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ProjectsComponent } from './src/projects/projects.component';
import { ProjectCellComponent } from "./src/project-cell/project-cell.component";
import { NavbarComponent } from "./src/navbar/navbar.component";
import { FooterComponent } from './src/footer/footer.component';
import { AnchorPointComponent } from './src/anchor-point/anchor-point.component';
import { AboutComponent } from './src/about/about.component';
import { ContactComponent } from './src/contact/contact.component';
import { ProjectDetailComponent } from './src/project-detail/project-detail.component';
import { FormsModule, ReactiveFormsModule } from "@angular/forms";
import { HttpClientModule } from "@angular/common/http";

@NgModule({
  declarations: [
    AppComponent,
    ProjectsComponent,
    ProjectCellComponent,
    NavbarComponent,
    FooterComponent,
    AnchorPointComponent,
    AboutComponent,
    ContactComponent,
    ProjectDetailComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule,
    ReactiveFormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
