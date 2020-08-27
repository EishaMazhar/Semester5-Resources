#include<iostream>
#include<math.h>
#include<fstream>
using namespace std;

double nhit=0,nmiss=0,missrate,hitrate;
ofstream out;
static int s=0;

void print_2d(int **array,int rows,int cols)
{
	if(s>0)
	{
	   out.open("Output.txt",ios::app);
    }
    else
       out.open("Output.txt");
	
	s++;
	for(int  i=0; i<rows; i++)
	{
	out<<"set number"<<i<<" : ";
	for(int j=0; j<cols; j++)
	{
		if(array[i][j]!=INT_MIN)
		out<<(array[i][j]);
		out<<" ";
	}
	out<<"\n";
			
	}
	out.close();
}

int ishit(int **array,int size,int row,int num) //row has mod(setNo) 
{
	int i=0;
	for(i=0; i<size; i++)
	{
		if(array[row][i]==num)
		{
			return i;		//return column number where hit
		}
	}
	return -1;		//return -1 if miss
	
}

int minindex(int **array,int size,int row)
{
	
	int min_index=0;
	int min=array[row][0];
	for(int i=1; i<size; i++)
	{
       if(array[row][i]<min)
       {
	      min=array[row][i];
	      min_index=i;
       }
		
	}
	
	return min_index;
}
int maxindex(int **array,int size,int row)
{
	
	int max_index=0;
	int max=array[row][0];
	for(int i=1; i<size; i++)
	{
        if(array[row][i]>max)
        {
        	max=array[row][i];
	        max_index=i;
        }
		
	}
	
	return max_index;
}


void LRU(int set_no,int **sets,int **index,int rows,int n_way,int num)
{

int i,j,min_index=0,max_index=0;
bool status=false;

	max_index=maxindex(index,n_way,set_no);		//find max index from INDEX array
	
	int hit_index=ishit(sets,n_way,set_no,num);		//check if hit exists in the set 
    if(hit_index!=-1)
    {
	    nhit++;
		index[set_no][hit_index]=index[set_no][max_index]+1;
    }
    else
    {
       nmiss++;
       for(i=0; i<n_way; i++)
       {
	        if(sets[set_no][i] == INT_MIN)		//when block is empty
	        {
		        sets[set_no][i]=num;		//num is placed in first empty space
		        
	            if(i!=0)
            	index[set_no][i]=index[set_no][i-1]+1;		//Indez status incremented
            	
	            status=true;		//when no replacement needed and value is places in block
		        break;
	         }
      }

	
	   if(!status)
	   {
	        min_index=minindex(index,n_way,set_no);		//return column LRU
		    sets[set_no][min_index]=num;					
		    index[set_no][min_index]=index[set_no][max_index]+1;
	   }
	
    }

    print_2d(sets,rows,n_way);
			
}


int main()
{
	long long int mainmemorysize,cashesize,blocksize,associativity,totalblocks,totalsets,physicalbits;
	cout<<"Enter Main Memory size : ";
	cin>>mainmemorysize;
	physicalbits=log2(mainmemorysize);	
	cout<<"Enter Cashe size : ";
	cin>>cashesize;
	
	if(cashesize>mainmemorysize)
	{
		cout<<"cashesize should be less than main memory size";
		exit(0);
	}
	
	cout<<"Enter Block size : ";
	cin>>blocksize;
	cout<<"Enter associativity : ";
	cin>>associativity;
	totalblocks=cashesize/blocksize;
	totalsets=totalblocks/associativity;
	cout<<"Cashe size is : "<<cashesize<<endl;
	cout<<"Block size is : "<<blocksize<<endl;
	cout<<"associativity is : "<<associativity<<endl;
	cout<<"Total blocks are : "<<totalblocks<<endl;
	cout<<"Total sets are : "<<totalsets<<endl;
	cout<<"Physical adrees bits are : "<<physicalbits<<endl;
	long long int offsetbits=log2(blocksize);
	cout<<"Total offset bits are : "<<offsetbits<<endl;
	long long int indexbits=log2(totalsets);
	cout<<"Total index bits are : "<<indexbits<<endl;
	int Tagbits=physicalbits-offsetbits-indexbits;
	cout<<"Total tag  bits are : "<<Tagbits<<endl;	
	
		//Values
	int **temp=new int*[totalsets];
	for(int i = 0; i < totalsets; ++i) {
    temp[i] = new int[associativity];
    
}

//Indexing

	int **index=new int*[totalsets];
	for(int i = 0; i < totalsets; ++i) {
    index[i] = new int[associativity];
    
}
for(int i=0; i<totalsets; i++)
{
	for(int j=0; j<associativity; j++)
	{
		index[i][j]=0;
		temp[i][j]=INT_MIN;
	}
}

	
	long long int n,b,sn;
	cout<<"Enter how many block numbers you want to enter : ";
	cin>>n;
	for(int i=0;i<n;i++)
	{
		cin>>b;
		sn=b%totalsets;
		LRU(sn,temp,index,totalsets,associativity,b);
	}
	hitrate=nhit/(nhit+nmiss);
	missrate=nmiss/(nhit+nmiss);
	cout<<"Number of misses are :  "<<nmiss<<endl;
	cout<<"Number of hits are : "<<nhit<<endl;
	cout<<"Miss rate is : "<<missrate<<endl;
	cout<<"Hit rate is : "<<hitrate<<endl;	
}
