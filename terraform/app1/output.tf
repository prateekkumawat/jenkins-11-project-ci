output "vpc_id" {
  value = aws_vpc.this1.id
}

output "subnet_ids" {
  value = aws_subnet.this1[*].id
}