import React, { useEffect, useState } from 'react';
import axios from 'axios';
import 'bootstrap/dist/css/bootstrap.min.css'; // Import Bootstrap CSS
const apiUrl = "http://localhost:8000/api/show-attendance"; // Example URL

const AttendanceList = () => {
    const [attendances, setAttendances] = useState([]);

    useEffect(() => {
        // Make an API request to get attendance information
        axios.get(apiUrl)
            .then(response => {
                setAttendances(response.data.data);
            })
            .catch(error => {
                console.error(error);
            });
    }, []);

    return (
        <div className="container mt-5">
            <h1 className="mb-4">Attendance Information</h1>
            <table className="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Total Working Hours</th>
                    </tr>
                </thead>
                <tbody>
                    {attendances.map(attendance => (
                        <tr key={attendance.id}>
                            <td>{attendance.user.name}</td>
                            <td>{attendance.check_in || 'N/A'}</td>
                            <td>{attendance.check_out || 'N/A'}</td>
                            <td>{attendance.total_hours || 'N/A'}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default AttendanceList;
