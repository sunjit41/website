<form id="form1">
    <a onclick="topFunction()" id="myBtn" title="Go to top">Top</a>
    <div class="heading" style="background-color:#008080; color: #fff; padding-top:40px; margin: 20px;">
        <h1>Programming Codes</h1>
    </div>
    <svg style="background-color:#282A35; display: block;" width="100%" height="45" viewBox="0 0 100 100"
        preserveAspectRatio="none">
        <path id="wavepath1" d="M0,0  L130, 0C35,150 25,0 0,100z" fill="#008080"></path>
    </svg>

    <div class="outer" style="background-color:#282A35; color: #fff">
        <div class="inner">
            <h2>Computer Graphics programming in C++ using GLUT & Codeblocks</h2>
            <hr style="border-top: 1px solid white;">
            <section class="content"
                style="border-radius: 12px; color: #282A35; background-image: url('/assets/images/bg4.jpg');">
                <div
                    style="box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); width: 100%; background-color:aqua; padding:10px; border-radius: 12px;">
                    <h3>1.) CASA 2D </h3>
                    <div style="width:100%; text-align:center;">
                        <iframe style="width:95%; aspect-ratio: 16 / 9;"
                            src="https://www.youtube.com/embed/stKHnejgzqc?si=hzTIXWadzCAmSSox"
                            title="YouTube video player" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen="allowfullscreen"></iframe>
                    </div>
                    <p><a class="green-link-dark" href="javascript:copyCode('code1');">Copy Code</a></p>
                    <div style="width:100%; text-align:center;">
                        <textarea id="code1" readonly cols="80" rows="20" style="width: 95%;">
#include<GL/glut.h>
#include<iostream>

using namespace std;

GLfloat moveSpeed = 10;

void display();
void keyboard(unsigned char, int, int);
void drawBorder();
void drawBuildings();
void displayText(GLfloat, GLfloat, GLfloat, GLfloat, GLfloat, string);
void drawLabels();

/* USE the A, S, W, D keys on your keyboard to perform translations */

int main (int argc, char* argv[])
{
    glutInit(& argc, argv);
    glutInitDisplayMode(GLUT_RGB | GLUT_DOUBLE);
    glutInitWindowSize(800, 600);
    glutInitWindowPosition(180, 30);
    glutCreateWindow("College of Applied Science - Adoor (MSC CS / 2021-2023)");
    gluOrtho2D(0, 799, 599, 0);
    glClearColor(1.0f, 1.0f, 1.0f, 0.0f);
    glutDisplayFunc(display);
    glutKeyboardFunc(keyboard);
    glutMainLoop();
    return EXIT_SUCCESS;
}

void display()
{
    glClear(GL_COLOR_BUFFER_BIT);
    glPointSize(5.0f);
    drawBorder();
    drawBuildings();
    drawLabels();
    glutSwapBuffers();
}

void keyboard(unsigned char key,int, int)
{
    switch(key)
    {
        case 'a':
        case 'A':
            glTranslatef(moveSpeed, 0.0f, 0.0f);
            glutPostRedisplay();
            break;
        case 'd':
        case 'D':
            glTranslatef(-moveSpeed, 0.0f, 0.0f);
            glutPostRedisplay();
            break;
        case 'w':
        case 'W':
            glTranslatef(0.0f, moveSpeed, 0.0f);
            glutPostRedisplay();
            break;
        case 's':
        case 'S':
            glTranslatef(0.0f, -moveSpeed, 0.0f);
            glutPostRedisplay();
            break;
    }
}

void drawBorder()
{
    // Boundary Line
    glBegin(GL_LINES);
    glColor3f(0.0f, 0.0f, 0.0f);
    glVertex2i(10, 10);
    glVertex2i(789, 10);
    glVertex2i(789, 10);
    glVertex2i(789, 589);
    glVertex2i(789, 589);
    glVertex2i(10, 589);
    glVertex2i(10, 589);
    glVertex2i(10, 10);
    glEnd();
}

void drawBuildings()
{
    // Canteen Building
    glBegin(GL_POLYGON);
    glColor3f(0.8f, 0.8f, 0.0f);
    glVertex2i(300, 500);
    glVertex2i(400, 500);
    glVertex2i(400, 550);
    glVertex2i(300, 550);
    glEnd();
    
    // Building 1
    glBegin(GL_POLYGON);
    glColor3f(0.0f, 0.6f, 0.0f);
    glVertex2i(20, 550);
    glVertex2i(20, 200);
    glVertex2i(100, 200);
    glVertex2i(100, 450);
    glVertex2i(200, 450);
    glVertex2i(200, 550);
    glEnd();
    
    // Building 2
    glBegin(GL_POLYGON);
    glColor3f(0.5f, 0.5f, 0.5f);
    glVertex2i(650, 500);
    glVertex2i(650, 300);
    glVertex2i(750, 300);
    glVertex2i(750, 500);
    glEnd();
    
    // Main Building
    glBegin(GL_POLYGON);
    glColor3f(0.0f, 0.0f, 1.0f);
    glVertex2i(120, 20);
    glVertex2i(650, 20);
    glVertex2i(650, 100);
    glVertex2i(450, 100);
    glVertex2i(400, 100);
    glVertex2i(120, 100);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0f, 0.0f, 1.0f);
    glVertex2i(445, 100);
    glVertex2i(445, 130);
    glVertex2i(345, 130);
    glVertex2i(345, 100);
    glEnd();
    
    // Old Building
    glBegin(GL_POLYGON);
    glColor3f(0.8f, 0.0f, 0.0f);
    glVertex2i(280, 450);
    glVertex2i(280, 370);
    glVertex2i(600, 370);
    glVertex2i(600, 450);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.8f, 0.0f, 0.0f);
    glVertex2i(280, 230);
    glVertex2i(280, 150);
    glVertex2i(600, 150);
    glVertex2i(600, 230);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.8f, 0.0f, 0.0f);
    glVertex2i(400, 370);
    glVertex2i(400, 230);
    glVertex2i(480, 230);
    glVertex2i(480, 370);
    glEnd();
    
    // IT Lab Building
    glBegin(GL_POLYGON);
    glColor3f(0.0f, 0.0f, 0.0f);
    glVertex2i(520, 350);
    glVertex2i(520, 250);
    glVertex2i(600, 250);
    glVertex2i(600, 350);
    glEnd();
}

void displayText(GLfloat x, GLfloat y, GLfloat red, GLfloat green, GLfloat blue, string stringText)
{
    glColor3f(red, green, blue);
    glRasterPos2f(x, y);
    int len, i;
    len = (int)stringText.length();
    for (i = 0; i < len; i++)
    {
        glutBitmapCharacter(GLUT_BITMAP_9_BY_15, stringText[i]);
    }
}

void drawLabels()
{
    displayText(320, 525, 0, 0, 0, "Canteen");
    displayText(50, 500, 0, 0, 0, "Building 1");
    displayText(655, 400, 0, 0, 0, "Building 2");
    displayText(340, 50, 1, 1, 1, "Main Building");
    displayText(380, 410, 1, 1, 1, "Old Building");
    displayText(530, 300, 1, 1, 1, "IT LAB");
    displayText(210, 580, 0, 0, 0, "Main Gate");
    displayText(700, 260, 0, 0, 0, "Gate 2 ->");
    displayText(-200, 300, 0, 0, 0, "Government Hospital");
    displayText(-200, 325, 0, 0, 0, " ADOOR ");
    displayText(340, -100, 0, 0, 0, "Parthasarathy Temple, ADOOR");
    displayText(30, 620, 0, 0, 0, "This sample program uses OpenGL primitive for the drawings.");
    displayText(30, 640, 0, 0, 0, "Credits: College of Applied Science, Adoor");
    displayText(30, 660, 0, 0, 0, "MSc. Computer Science, Batch 2021 - 2023");
    displayText(30, 680, 0, 0, 0, "Development Team: Abhin, Aiswarya, Aleena, Anagha, Drishya, Sunjit, Sikha");
    displayText(30, 700, 0, 0, 0, "Programming: GLUT, C++ , Codeblocks");
}
</textarea>
                    </div>
                </div>
            </section>
            <hr style="border-top: 1px solid #282A35;">
            <section class="content"
                style="border-radius: 12px; color: #282A35; background-image: url('/assets/images/bg4.jpg');">
                <div
                    style="box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); width: 100%; background-color:aqua; padding:10px; border-radius: 12px;">
                    <h3>2.) Mobile 3D Rotate</h3>
                    <div style="width:100%; text-align:center;">
                        <iframe style="width:95%; aspect-ratio: 16 / 9;"
                            src="https://www.youtube.com/embed/fUwRwfUwNBI?si=oynax-M-f7Xsf2ss"
                            title="YouTube video player" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen="allowfullscreen"></iframe>
                    </div>
                    <p><a class="green-link-dark" href="javascript:copyCode('code2');">Copy Code</a></p>
                    <div style="width:100%; text-align:center;">
                        <textarea id="code2" readonly cols="80" rows="20" style="width: 95%;">
#include<GL/Glut.h>
#include<iostream>

using namespace std;

void displayText(GLfloat , GLfloat , GLfloat , GLfloat , GLfloat , string );
void drawMobile(const GLfloat, double , int );
void display();
void idle();

const GLfloat mobile1[36][3] =
{
    {-0.6, 0.0, 0.0},{-0.6, 0.5, 0.0},{-0.4, 0.5, 0.0},{-0.4, 0.0, 0.0},
    {-0.6, 0.5, 0.0},{-0.6, 0.5, 0.05},{-0.4, 0.5, 0.05},{-0.4, 0.5, 0.0},
    {-0.4, 0.5, 0.0},{-0.4, 0.5, 0.05},{-0.4, 0.0, 0.05},{-0.4, 0.0, 0.0},
    {-0.6, 0.0, 0.0},{-0.6, 0.5, 0.0},{-0.6, 0.5, 0.05},{-0.6, 0.0, 0.05},
    {-0.6, 0.0, 0.05},{-0.6, 0.5, 0.05},{-0.4, 0.5, 0.05},{-0.4, 0.0, 0.05},
    {-0.6, 0.0, 0.0},{-0.6, 0.0, 0.05},{-0.4, 0.0, 0.05},{-0.4, 0.0, 0.0},
    {-0.5875, 0.05, -0.00625},{-0.5875, 0.4875, -0.00625},{-0.4125, 0.4875,-0.00625},
    {-0.4125, 0.05, -0.00625},{-0.52, -0.00625, 0.0125},{-0.52, -0.00625, 0.0375},
    {-0.48, -0.00625, 0.0375},{-0.48,-0.00625, 0.0125},{-0.39375, 0.4, 0.0125},
    {-0.39375, 0.4, 0.0375},{-0.39375, 0.3, 0.0375},{-0.39375,0.3, 0.0125}
};

const GLfloat mobile2[36][3] =
{
    {-0.2, 0.0, 0.0},{-0.2, 0.5, 0.0},{0.0, 0.5, 0.0},{0.0, 0.0, 0.0},
    {-0.2, 0.5, 0.0},{-0.2, 0.5, 0.05},{0.0, 0.5, 0.05},{0.0, 0.5, 0.0},
    {0.0, 0.5, 0.0},{0.0, 0.5, 0.05},{0.0, 0.0, 0.05},{0.0, 0.0, 0.0},
    {-0.2, 0.0, 0.0},{-0.2, 0.5, 0.0},{-0.2, 0.5, 0.05},{-0.2, 0.0, 0.05},
    {-0.2, 0.0, 0.05},{-0.2, 0.5, 0.05},{0.0, 0.5, 0.05},{0.0, 0.0, 0.05},
    {-0.2, 0.0, 0.0},{-0.2, 0.0, 0.05},{0.0, 0.0, 0.05},{0.0, 0.0, 0.0},
    {-0.1875, 0.05, -0.00625},{-0.1875, 0.4875, -0.00625},{-0.0125, 0.4875, -0.00625},
    {-0.0125, 0.05, -0.00625},{-0.12, -0.00625, 0.0125},{-0.12, -0.00625, 0.0375},
    {-0.08, -0.00625, 0.0375},{-0.08, -0.00625, 0.0125},{0.00625, 0.4, 0.0125},
    {0.00625, 0.4, 0.0375},{0.00625, 0.3, 0.0375},{0.00625, 0.3, 0.0125}
};

const GLfloat mobile3[36][3] =
{
    {0.3, 0.0, 0.0},{0.3, 0.5, 0.0},{0.5, 0.5, 0.0},{0.5, 0.0, 0.0},
    {0.3, 0.5, 0.0},{0.3, 0.5, 0.05},{0.5, 0.5, 0.05},{0.5, 0.5, 0.0},
    {0.5, 0.5, 0.0},{0.5, 0.5, 0.05},{0.5, 0.0, 0.05},{0.5, 0.0, 0.0},
    {0.3, 0.0, 0.0},{0.3, 0.5, 0.0},{0.3, 0.5, 0.05},{0.3, 0.0, 0.05},
    {0.3, 0.0, 0.05},{0.3, 0.5, 0.05},{0.5, 0.5, 0.05},{0.5, 0.0, 0.05},
    {0.3, 0.0, 0.0},{0.3, 0.0, 0.05},{0.5, 0.0, 0.05},{0.5, 0.0, 0.0},
    {0.3125, 0.05, -0.00625},{0.3125, 0.4875, -0.00625},{0.4875, 0.4875, -0.00625},
    {0.4875, 0.05, -0.00625},{0.38, -0.00625, 0.0125},{0.38, -0.00625, 0.0375},
    {0.42, -0.00625, 0.0375},{0.42,-0.00625, 0.0125},{0.50625, 0.4, 0.0125},
    {0.50625, 0.4, 0.0375},{0.50625, 0.3, 0.0375},{0.50625, 0.3,0.0125}
};

int main(int argc, char* agrv[])
{
    glutInit(&argc, agrv);
    glutInitWindowSize(800, 600);
    glutInitWindowPosition(150, 50);
    glutInitDisplayMode(GLUT_RGB | GLUT_DOUBLE | GLUT_DEPTH);
    glutCreateWindow("Rotating 3D Objects");
    glutDisplayFunc(display);
    glutIdleFunc(idle);
    glEnable( GL_DEPTH_TEST );
    glClearColor(0.4, 0.4, 0.4, 0.0);
    glutMainLoop();
    return EXIT_SUCCESS;
}

void displayText(GLfloat x, GLfloat y, GLfloat red, GLfloat green, GLfloat blue, string stringText)
{
    glColor3f(red, green, blue);
    glRasterPos2f(x, y);
    int len, i;
    len = (int)stringText.length();
    for (i = 0; i < len; i++)
    {
        glutBitmapCharacter(GLUT_BITMAP_9_BY_15, stringText[i]);
    }
}

void drawMobile(const GLfloat mobile[36][3], double rotationAngle, int mobileNumber)
{
    glPushMatrix();
    if (mobileNumber == 1)
    {
        glTranslatef(-0.5 , 0.25 ,0.0);
        glRotatef(rotationAngle, 1, 0, 0);
        glTranslatef(0.5 , -0.25 ,0.0);
    }
    else if(mobileNumber == 2)
    {
        glTranslatef(-0.1 , 0.25 ,0.0);
        glRotatef(rotationAngle, 0, 1, 0);
        glTranslatef(0.1 , -0.25 ,0.0);
    }
    else
    {
        glTranslatef(0.4 , 0.25 ,0.0);
        glRotatef(rotationAngle, 0, 0, 1);
        glTranslatef(-0.4 , -0.25 ,0.0);
    }
    glBegin(GL_QUADS);
    
    //Front Side
    glColor3f(0.75, 0.75, 0.75);
    glVertex3fv(mobile[0]);
    glVertex3fv(mobile[1]);
    glVertex3fv(mobile[2]);
    glVertex3fv(mobile[3]);
    
    //Top Side
    glColor3f(0.55, 0.55, 0.55);
    glVertex3fv(mobile[4]);
    glVertex3fv(mobile[5]);
    glVertex3fv(mobile[6]);
    glVertex3fv(mobile[7]);
    
    // Right Side
    glColor3f(0.55, 0.55, 0.55);
    glVertex3fv(mobile[8]);
    glVertex3fv(mobile[9]);
    glVertex3fv(mobile[10]);
    glVertex3fv(mobile[11]);
    
    // LeftSide
    glColor3f(0.55, 0.55, 0.55);
    glVertex3fv(mobile[12]);
    glVertex3fv(mobile[13]);
    glVertex3fv(mobile[14]);
    glVertex3fv(mobile[15]);
    
    // Back Side
    glColor3f(0.0, 0.25, 0.25);
    glVertex3fv(mobile[16]);
    glVertex3fv(mobile[17]);
    glVertex3fv(mobile[18]);
    glVertex3fv(mobile[19]);
    
    // Bottom Side
    glColor3f(0.55, 0.55, 0.55);
    glVertex3fv(mobile[20]);
    glVertex3fv(mobile[21]);
    glVertex3fv(mobile[22]);
    glVertex3fv(mobile[23]);
    
    // Black Glass
    glColor3f(0, 0, 0);
    glVertex3fv(mobile[24]);
    glVertex3fv(mobile[25]);
    glVertex3fv(mobile[26]);
    glVertex3fv(mobile[27]);
    
    // Black Bottom Charging Port
    glColor3f(0, 0, 0);
    glVertex3fv(mobile[28]);
    glVertex3fv(mobile[29]);
    glVertex3fv(mobile[30]);
    glVertex3fv(mobile[31]);
    
    // Black Side Switch
    glColor3f(0, 0, 0);
    glVertex3fv(mobile[32]);
    glVertex3fv(mobile[33]);
    glVertex3fv(mobile[34]);
    glVertex3fv(mobile[35]);
    glEnd();
    glPopMatrix();
}

void display()
{
    glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
    const double t = glutGet(GLUT_ELAPSED_TIME) / 1000.0;
    const double i = t*60.0;
    displayText(-0.4, 0.8, 0.0, 1.0, 1.0, "OBJECT ROTATION IN ALL 3 AXIS");
    displayText(-0.4, 0.7, 0.0, 1.0, 1.0, "Sample object - Mobile Phone");
    displayText(-0.6, -0.2, 0.0, 1.0, 1.0, "X - Axis");
    displayText(-0.2, -0.2, 0.0, 1.0, 1.0, "Y - Axis");
    displayText(0.3, -0.2, 0.0, 1.0, 1.0, "Z - Axis");
    displayText(-0.9, -0.4, 1.0, 1.0, 1.0, "This sample program demonstrates the rotating of each object in their own axis.");
    displayText(-0.9, -0.5, 1.0, 1.0, 1.0, "Credits: College of Applied Science, Adoor");
    displayText(-0.9, -0.6, 1.0, 1.0, 1.0, "MSc. Computer Science, Batch 2021 - 2023");
    displayText(-0.9, -0.7, 1.0, 1.0, 1.0, "Development Team: Abhin, Aiswarya, Aleena, Anagha, Drishya, Sunjit, Sikha");
    displayText(-0.9, -0.8, 1.0, 1.0, 1.0, "Programming: GLUT, C++, Codeblocks");
    drawMobile(mobile1, i , 1);
    drawMobile(mobile2, i , 2);
    drawMobile(mobile3, i , 3);
    glutSwapBuffers();
}

void idle()
{
    glutPostRedisplay();
}
                        </textarea>
                    </div>
                </div>
            </section>
            <hr style="border-top: 1px solid #282A35;">
            <section class="content"
                style="border-radius: 12px; color: #282A35; background-image: url('/assets/images/bg4.jpg');">
                <div
                    style="box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); width: 100%; background-color:aqua; padding:10px; border-radius: 12px;">
                    <h3>3.) Camera Movement </h3>
                    <div style="width:100%; text-align:center;">
                        <iframe style="width:95%; aspect-ratio: 16 / 9;"
                            src="https://www.youtube.com/embed/8WI3vWVpxzg?si=TS97eHgN9jJGQY6k"
                            title="YouTube video player" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen="allowfullscreen"></iframe>
                    </div>
                    <p><a class="green-link-dark" href="javascript:copyCode('code3');">Copy Code</a></p>
                    <div style="width:100%; text-align:center;">
                        <textarea id="code3" readonly cols="80" rows="20" style="width: 95%;">
#include<GL/glut.h>
#include<iostream>

using namespace std;

void display();
void special(int, int, int);
void reshape(int, int);
void idle();
void drawStrokeText(string, int, int, int);

GLdouble speed = 0.05;
GLdouble eyeX = 0.0;
GLdouble eyeY = 0.0;
GLdouble eyeZ = 4.0;
GLfloat rotateX, rotateY, rotateZ = 0.0;

int main(int argc, char * argv[])
{
    glutInit(&argc, argv);
    glutInitDisplayMode(GLUT_RGB |GLUT_DOUBLE | GLUT_DEPTH);
    glutInitWindowSize(800, 600);
    glutInitWindowPosition(150, 50);
    glutCreateWindow("Camera Movement using - gluLookAt");
    glutDisplayFunc(display);
    glutSpecialFunc(special);
    glutReshapeFunc(reshape);
    glutIdleFunc(idle);
    glEnable(GL_DEPTH_TEST);
    glClearColor(0.2, 0.2, 0.2 , 0.0);
    glutMainLoop();
    return EXIT_SUCCESS;
}

void display()
{
    glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
    const double t = glutGet(GLUT_ELAPSED_TIME) / 1000.0;
    const double a = t*60;
    
    // MOVE CAMERA
    glMatrixMode(GL_MODELVIEW);
    glLoadIdentity();
    gluLookAt(eyeX, eyeY, eyeZ, 0, 0, 0, 0, .2, 0.0);
    glBegin(GL_LINES);
    
    // Red Line
    glColor3f(1.0, 0.0, 0.0);
    glVertex3f(-1.0, 0.0, 0.0);
    glVertex3f(1.0, 0.0, 0.0);
    
    // Green Line
    glColor3f(0.0, 1.0, 0.0);
    glVertex3f(0.0, -1.0, 0.0);
    glVertex3f(0.0, 1.0, 0.0);
    
    //Blue Line
    glColor3f(0.0, 0.0, 1.0);
    glVertex3f(0.0, 0.0, -1.0);
    glVertex3f(0.0, 0.0, 1.0);
    glEnd();
    
    // TOP ROOF
    glColor3f(0.0, 0.5, 0.0);
    glBegin(GL_POLYGON);
    glVertex3f(-1.0, 1.0, -1.0);
    glVertex3f(-1.0, 1.0, 1.0);
    glVertex3f(1.0, 1.0, 1.0);
    glVertex3f(1.0, 1.0, -1.0);
    glEnd();
    
    // BOTTOM FLOOR
    glColor3f(0.0, 0.5, 0.0);
    glBegin(GL_POLYGON);
    glVertex3f(-1.0, -1.0, -1.0);
    glVertex3f(-1.0, -1.0, 1.0);
    glVertex3f(1.0, -1.0, 1.0);
    glVertex3f(1.0, -1.0, -1.0);
    glEnd();
    
    // BACK SKY
    glColor3f(0.0, 0.0, 0.5);
    glBegin(GL_POLYGON);
    glVertex3f(-1.0, 1.0, -1.0);
    glVertex3f(1.0, 1.0, -1.0);
    glVertex3f(1.0, -1.0, -1.0);
    glVertex3f(-1.0, -1.0, -1.0);
    glEnd();
    
    // LEFT WALL
    glColor3f(0.5, 0.0, 0.0);
    glBegin(GL_POLYGON);
    glVertex3f(-1.0, 1.0, -1.0);
    glVertex3f(-1.0, 1.0, 1.0);
    glVertex3f(-1.0, -1.0, 1.0);
    glVertex3f(-1.0, -1.0, -1.0);
    glEnd();
    
    // RIGHT WALL
    glColor3f(0.5, 0.0, 0.0);
    glBegin(GL_POLYGON);
    glVertex3f(1.0, 1.0, -1.0);
    glVertex3f(1.0, 1.0, 1.0);
    glVertex3f(1.0, -1.0, 1.0);
    glVertex3f(1.0, -1.0, -1.0);
    glEnd();
    
    // ROTATING DICE
    glPushMatrix();
    glRotatef(a, 1.0, 1.0, 1.0);
    
    // FACE 1
    glBegin(GL_POLYGON);
    glColor3f(1.0, 1.0, 1.0);
    glVertex3f(-0.2, -0.2, 0.2);
    glVertex3f(-0.2, 0.2, 0.2);
    glVertex3f(0.2, 0.2, 0.2);
    glVertex3f(0.2, -0.2, 0.2);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(-0.03, -0.03, 0.21);
    glVertex3f(-0.03, 0.03, 0.21);
    glVertex3f(0.03, 0.03, 0.21);
    glVertex3f(0.03, -0.03, 0.21);
    glEnd();
    
    // FACE 2
    glBegin(GL_POLYGON);
    glColor3f(0.8, 0.8, 0.8);
    glVertex3f(-0.2, 0.2, -0.2);
    glVertex3f(-0.2, 0.2, 0.2);
    glVertex3f(0.2, 0.2, 0.2);
    glVertex3f(0.2, 0.2, -0.2);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(-0.15, 0.21, 0.15);
    glVertex3f(-0.09, 0.21, 0.15);
    glVertex3f(-0.09, 0.21, 0.09);
    glVertex3f(-0.15, 0.21, 0.09);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(0.15, 0.21, -0.15);
    glVertex3f(0.09, 0.21, -0.15);
    glVertex3f(0.09, 0.21, -0.09);
    glVertex3f(0.15, 0.21, -0.09);
    glEnd();
    
    // FACE 3
    glBegin(GL_POLYGON);
    glColor3f(0.6, 0.6, 0.6);
    glVertex3f(0.2, 0.2, -0.2);
    glVertex3f(0.2, 0.2, 0.2);
    glVertex3f(0.2, -0.2, 0.2);
    glVertex3f(0.2, -0.2, -0.2);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(0.21, -0.03, 0.03);
    glVertex3f(0.21, 0.03, 0.03);
    glVertex3f(0.21, 0.03, -0.03);
    glVertex3f(0.21, -0.03, -0.03);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(0.21, 0.15, 0.15);
    glVertex3f(0.21, 0.15, 0.09);
    glVertex3f(0.21, 0.09, 0.09);
    glVertex3f(0.21, 0.09, 0.15);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(0.21, -0.15, -0.15);
    glVertex3f(0.21, -0.15, -0.09);
    glVertex3f(0.21, -0.09, -0.09);
    glVertex3f(0.21, -0.09, -0.15);
    glEnd();
    
    // FACE 4
    glBegin(GL_POLYGON);
    glColor3f(0.6, 0.6, 0.6);
    glVertex3f(-0.2, 0.2, -0.2);
    glVertex3f(-0.2, 0.2, 0.2);
    glVertex3f(-0.2, -0.2, 0.2);
    glVertex3f(-0.2, -0.2, -0.2);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(-0.21, -0.15, -0.15);
    glVertex3f(-0.21, -0.15, -0.09);
    glVertex3f(-0.21, -0.09, -0.09);
    glVertex3f(-0.21, -0.09, -0.15);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(-0.21, -0.15, 0.15);
    glVertex3f(-0.21, -0.15, 0.09);
    glVertex3f(-0.21, -0.09, 0.09);
    glVertex3f(-0.21, -0.09, 0.15);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(-0.21, 0.15, -0.15);
    glVertex3f(-0.21, 0.15, -0.09);
    glVertex3f(-0.21, 0.09, -0.09);
    glVertex3f(-0.21, 0.09, -0.15);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(-0.21, 0.15, 0.15);
    glVertex3f(-0.21, 0.15, 0.09);
    glVertex3f(-0.21, 0.09, 0.09);
    glVertex3f(-0.21, 0.09, 0.15);
    glEnd();
    
    // FACE 5
    glBegin(GL_POLYGON);
    glColor3f(0.8, 0.8, 0.8);
    glVertex3f(-0.2, -0.2, -0.2);
    glVertex3f(0.2, -0.2, -0.2);
    glVertex3f(0.2, -0.2, 0.2);
    glVertex3f(-0.2, -0.2, 0.2);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(-0.03, -0.21, -0.03);
    glVertex3f(-0.03, -0.21, 0.03);
    glVertex3f(0.03, -0.21, 0.03);
    glVertex3f(0.03, -0.21, -0.03);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(-0.15, -0.21, 0.15);
    glVertex3f(-0.09, -0.21, 0.15);
    glVertex3f(-0.09, -0.21, 0.09);
    glVertex3f(-0.15, -0.21, 0.09);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(0.15, -0.21, -0.15);
    glVertex3f(0.09, -0.21, -0.15);
    glVertex3f(0.09, -0.21, -0.09);
    glVertex3f(0.15, -0.21, -0.09);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(0.15, -0.21, 0.15);
    glVertex3f(0.09, -0.21, 0.15);
    glVertex3f(0.09, -0.21, 0.09);
    glVertex3f(0.15, -0.21, 0.09);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(-0.15, -0.21, -0.15);
    glVertex3f(-0.09, -0.21, -0.15);
    glVertex3f(-0.09, -0.21, -0.09);
    glVertex3f(-0.15, -0.21, -0.09);
    glEnd();
    
    // FACE 6
    glBegin(GL_POLYGON);
    glColor3f(1.0, 1.0, 1.0);
    glVertex3f(0.2, 0.2, -0.20);
    glVertex3f(-0.2, 0.2, -0.20);
    glVertex3f(-0.2, -0.2, -0.20);
    glVertex3f(0.2, -0.2,-0.20);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(-0.15, 0.15, -0.21);
    glVertex3f(-0.09, 0.15, -0.21);
    glVertex3f(-0.09, 0.09, -0.21);
    glVertex3f(-0.15, 0.09, -0.21);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(-0.03, 0.15, -0.21);
    glVertex3f(-0.03, 0.09, -0.21);
    glVertex3f(0.03, 0.09, -0.21);
    glVertex3f(0.03, 0.15, -0.21);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(-0.03, -0.15, -0.21);
    glVertex3f(-0.03, -0.09, -0.21);
    glVertex3f(0.03, -0.09, -0.21);
    glVertex3f(0.03, -0.15, -0.21);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(0.15, -0.15, -0.21);
    glVertex3f(0.09, -0.15, -0.21);
    glVertex3f(0.09, -0.09, -0.21);
    glVertex3f(0.15, -0.09, -0.21);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(0.15, 0.15, -0.21);
    glVertex3f(0.09, 0.15, -0.21);
    glVertex3f(0.09, 0.09, -0.21);
    glVertex3f(0.15, 0.09, -0.21);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(0.0, 0.0, 0.0);
    glVertex3f(-0.15, -0.15, -0.21);
    glVertex3f(-0.09, -0.15, -0.21);
    glVertex3f(-0.09, -0.09, -0.21);
    glVertex3f(-0.15, -0.09, -0.21);
    glEnd();
    glPopMatrix();
    glColor3f(1.0, 1.0, 1.0);
    string tmp= "eyeX = " + to_string(eyeX) + " , eyeY = " + to_string(eyeY) + " , eyeZ = " + to_string(eyeZ);
    drawStrokeText(tmp, -2.0, -2.0, 0.0);
    tmp = "Move Camera using your keyboard :- Arrow keys | Home | End";
    drawStrokeText(tmp, -2.0, 2.0, 0.0);
    glutSwapBuffers();
}

void special(int key, int, int)
{
    switch(key)
    {
        case GLUT_KEY_UP:
            if (eyeY < 3.0)
                eyeY = eyeY + speed;
            break;
        case GLUT_KEY_DOWN:
            if (eyeY > -3.0)
                eyeY = eyeY - speed;
            break;
        case GLUT_KEY_LEFT:
            if (eyeX > -3.0)
                eyeX = eyeX - speed;
            break;
        case GLUT_KEY_RIGHT:
            if (eyeX < 3.0)
                eyeX = eyeX + speed;
            break;
        case GLUT_KEY_HOME:
            if(eyeZ < 5)
                eyeZ = eyeZ + speed;
            break;
        case GLUT_KEY_END:
            if (eyeZ > 2.5)
                eyeZ = eyeZ - speed;
            break;
    }
    glutPostRedisplay();
}

void reshape(int width, int height)
{
    glViewport(0, 0, width, height);
    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    gluPerspective(65.0, GLfloat(width)/GLfloat(height), 1.0, 100.0);
    glMatrixMode(GL_MODELVIEW);
    glLoadIdentity();
}

void idle()
{
    glutPostRedisplay();
}

void drawStrokeText(string stringText, int x, int y, int z)
{
    glPushMatrix();
    glTranslatef(x, y, z);
    glScalef(0.001f, 0.001f, z);
    int len, i;
    len = (int)stringText.length();
    for (i=0; i < len; i++)
    {
        glutStrokeCharacter(GLUT_STROKE_ROMAN , stringText[i]);
    }
    glPopMatrix();
}
</textarea>
                    </div>
                </div>
            </section>
        </div>
    </div>
</form>
<svg style="background-color:#008080; display: block;" width="100%" height="45" viewBox="0 0 100 100"
    preserveAspectRatio="none">
    <path id="wavepath2" d="M0,0  L130, 0C35,150 25,0 0,100z" fill="#282A35"></path>
</svg>

<script>
    function copyCode(obj) {
        var copyText = document.getElementById(obj);
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
    }
</script>